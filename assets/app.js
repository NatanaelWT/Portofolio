document.body.classList.add('nav-ready');

const shellSelector = '#site-shell';
const ajaxLinkSelector = 'a[data-ajax-link]';
const ajaxFormSelector = 'form[data-ajax-form]';
const pageKeyFromUrl = (url) => `${url.pathname}${url.search}`;

let revealObserver = null;
let activeRequestController = null;
let currentPageKey = pageKeyFromUrl(new URL(window.location.href));

const syncNavbarState = () => {
    document.body.classList.toggle('nav-scrolled', window.scrollY > 18);
};

const setLoadingState = (isLoading) => {
    document.body.classList.toggle('is-loading', isLoading);

    const shell = document.querySelector(shellSelector);
    if (shell) {
        shell.setAttribute('aria-busy', isLoading ? 'true' : 'false');
    }
};

const closeNav = () => {
    const navPanel = document.querySelector('#nav-panel');
    const navToggle = document.querySelector('.nav-toggle');

    if (navPanel) {
        navPanel.classList.remove('open');
    }

    if (navToggle) {
        navToggle.setAttribute('aria-expanded', 'false');
    }
};

const scrollToHash = (hash, behavior = 'smooth') => {
    if (!hash) {
        window.scrollTo({ top: 0, behavior });
        return;
    }

    const target = document.querySelector(hash);
    if (target) {
        target.scrollIntoView({ behavior, block: 'start' });
    }
};

const syncHead = (doc) => {
    document.title = doc.title;

    if (doc.documentElement.lang) {
        document.documentElement.lang = doc.documentElement.lang;
    }

    const ajaxErrorText = doc.documentElement.getAttribute('data-ajax-error');
    if (ajaxErrorText !== null) {
        document.documentElement.setAttribute('data-ajax-error', ajaxErrorText);
    }

    const nextDescription = doc.querySelector('meta[name="description"]');
    const currentDescription = document.querySelector('meta[name="description"]');
    if (nextDescription && currentDescription) {
        currentDescription.setAttribute('content', nextDescription.getAttribute('content') || '');
    }
};

const initNav = () => {
    const navToggle = document.querySelector('.nav-toggle');
    const navPanel = document.querySelector('#nav-panel');

    if (!navToggle || !navPanel) {
        return;
    }

    navToggle.addEventListener('click', () => {
        const isOpen = navPanel.classList.toggle('open');
        navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    navPanel.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            if (window.matchMedia('(max-width: 780px)').matches) {
                closeNav();
            }
        });
    });
};

const initReveal = () => {
    if (revealObserver) {
        revealObserver.disconnect();
        revealObserver = null;
    }

    const reveals = document.querySelectorAll('.reveal');
    if (!reveals.length) {
        return;
    }

    if (!('IntersectionObserver' in window)) {
        reveals.forEach((item) => item.classList.add('show'));
        return;
    }

    revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.16 });

    reveals.forEach((item) => revealObserver.observe(item));
};

const initPage = () => {
    initNav();
    initReveal();
    syncNavbarState();
};

const replaceShell = (doc) => {
    const nextShell = doc.querySelector(shellSelector);
    const currentShell = document.querySelector(shellSelector);

    if (!nextShell || !currentShell) {
        throw new Error('Page shell missing.');
    }

    currentShell.replaceWith(nextShell);
    initPage();
};

const setSubmitterBusy = (submitter) => {
    if (!submitter) {
        return () => {};
    }

    const originalLabel = submitter.textContent;
    submitter.disabled = true;
    submitter.classList.add('is-loading');

    if (submitter.dataset.loadingLabel) {
        submitter.textContent = submitter.dataset.loadingLabel;
    }

    return () => {
        if (!submitter.isConnected) {
            return;
        }

        submitter.disabled = false;
        submitter.classList.remove('is-loading');
        submitter.textContent = originalLabel;
    };
};

const fetchAndSwapPage = async (url, {
    method = 'GET',
    body = null,
    historyMode = 'push',
    focusSelector = '',
    scrollBehavior = 'smooth'
} = {}) => {
    const targetUrl = new URL(url, window.location.href);
    const fetchUrl = `${targetUrl.pathname}${targetUrl.search}`;

    if (activeRequestController) {
        activeRequestController.abort();
    }

    const controller = new AbortController();
    activeRequestController = controller;

    setLoadingState(true);
    closeNav();

    try {
        const response = await fetch(fetchUrl, {
            method,
            body,
            cache: 'no-store',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            signal: controller.signal
        });

        if (!response.ok) {
            throw new Error('Request failed.');
        }

        const html = await response.text();
        const doc = new DOMParser().parseFromString(html, 'text/html');

        syncHead(doc);
        replaceShell(doc);
        currentPageKey = pageKeyFromUrl(targetUrl);

        if (historyMode === 'push') {
            window.history.pushState({ ajax: true }, '', targetUrl.toString());
        } else if (historyMode === 'replace') {
            window.history.replaceState({ ajax: true }, '', targetUrl.toString());
        }

        window.requestAnimationFrame(() => {
            scrollToHash(targetUrl.hash, scrollBehavior);

            if (focusSelector) {
                const focusTarget = document.querySelector(focusSelector);
                if (focusTarget) {
                    focusTarget.focus({ preventScroll: true });
                }
            }
        });
    } catch (error) {
        if (error.name === 'AbortError') {
            return;
        }

        const fallbackMessage = document.documentElement.getAttribute('data-ajax-error') || 'There was a problem loading the page. Please try again.';
        window.alert(fallbackMessage);
        window.location.href = targetUrl.toString();
    } finally {
        if (activeRequestController === controller) {
            activeRequestController = null;
        }

        setLoadingState(false);
    }
};

document.addEventListener('click', (event) => {
    const link = event.target.closest(ajaxLinkSelector);
    if (!link) {
        return;
    }

    if (
        event.defaultPrevented ||
        event.button !== 0 ||
        link.target === '_blank' ||
        link.hasAttribute('download') ||
        event.metaKey ||
        event.ctrlKey ||
        event.shiftKey ||
        event.altKey
    ) {
        return;
    }

    const targetUrl = new URL(link.href, window.location.href);
    if (targetUrl.origin !== window.location.origin) {
        return;
    }

    event.preventDefault();

    if (link.hasAttribute('data-preserve-hash') && !targetUrl.hash && window.location.hash) {
        targetUrl.hash = window.location.hash;
    }

    const nextPageKey = pageKeyFromUrl(targetUrl);
    if (nextPageKey === currentPageKey) {
        if (targetUrl.hash !== window.location.hash || (!targetUrl.hash && window.location.hash)) {
            window.history.pushState({ ajax: true }, '', targetUrl.toString());
        }

        scrollToHash(targetUrl.hash, 'smooth');
        closeNav();
        return;
    }

    fetchAndSwapPage(targetUrl.toString());
});

window.addEventListener('scroll', syncNavbarState, { passive: true });
window.addEventListener('resize', syncNavbarState);

document.addEventListener('submit', (event) => {
    const form = event.target.closest(ajaxFormSelector);
    if (!form) {
        return;
    }

    event.preventDefault();

    const actionUrl = new URL(form.action, window.location.href);
    const formData = new FormData(form);
    const submitter = event.submitter instanceof HTMLElement ? event.submitter : form.querySelector('[type="submit"]');

    if (submitter && submitter.name) {
        formData.append(submitter.name, submitter.value);
    }

    const restoreSubmitter = setSubmitterBusy(submitter);

    fetchAndSwapPage(actionUrl.toString(), {
        method: 'POST',
        body: formData,
        historyMode: 'replace',
        focusSelector: '.form-status',
        scrollBehavior: 'smooth'
    }).finally(() => {
        restoreSubmitter();
    });
});

window.addEventListener('popstate', () => {
    const targetUrl = new URL(window.location.href);
    const nextPageKey = pageKeyFromUrl(targetUrl);

    if (nextPageKey === currentPageKey) {
        scrollToHash(targetUrl.hash, 'auto');
        return;
    }

    fetchAndSwapPage(targetUrl.toString(), {
        historyMode: 'none',
        scrollBehavior: 'auto'
    });
});

initPage();
