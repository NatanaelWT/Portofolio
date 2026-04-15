<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: 0');

$name = "Natanael Wijaya Tiono";
$title = [
    "id" => "Lulusan Informatika | Web Developer | Pendidik",
    "en" => "Informatics Graduate | Web Developer | Educator"
];
$email = "natanaelhdxd25@gmail.com";
$phone = "+62 82158114721";
$birthDate = "25 January 2004";
$github = "https://github.com/NatanaelWT";
$linkedin = "https://www.linkedin.com/in/natanael-wijaya-tiono-31a76925b";
$instagram = "#";
$profilePhoto = "assets/profile.jpg";
$githubUsername = "NatanaelWT";
$linkedinUsername = "Natanael Wijaya Tiono";

$about = [
    "id" => "Saya merupakan lulusan Informatika yang menaruh minat pada pengembangan web, pemecahan masalah, dan proses belajar yang berkelanjutan. Pengalaman saya mencakup administrasi, pengajaran, dukungan teknis komputer, serta magang pemrograman menggunakan Python dan Django. Saya juga aktif dalam organisasi, pelayanan, dan proyek pendidikan berbasis teknologi.",
    "en" => "I am an Informatics graduate with a strong interest in web development, problem solving, and continuous learning. My experience includes administration, teaching, computer technical support, and a programming internship using Python and Django. I am also active in organizations, service work, and technology-based education projects."
];

$skills = [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "MySQL",
    "Python",
    "Microsoft Office",
    "Google Workspace",
];

$experiences = [
    [
        "role" => "Administrative Staff",
        "company" => "REC Kutisari Church",
        "period" => "Aug 2025 - Present",
        "description" => [
            "id" => "Mengelola data jemaat, arsip administrasi gereja, dan membantu kebutuhan administratif anggota jemaat.",
            "en" => "Managed congregation data, church administration archives, and supported members' administrative needs."
        ]
    ],
    [
        "role" => "Volunteer Teacher",
        "company" => "Kenosis - Perkantas Surabaya",
        "period" => "Jun 2023 - Present",
        "description" => [
            "id" => "Membantu mengajar Matematika dan mata pelajaran lain dalam program bimbingan belajar gratis sebagai bagian dari pelayanan masyarakat.",
            "en" => "Assisted in teaching Mathematics and other subjects in a free tutoring program as part of community service."
        ]
    ],
    [
        "role" => "Programmer Intern",
        "company" => "PT. Nusa Unggul Sarana Adicipta",
        "period" => "Jan 2025 - Feb 2025",
        "description" => [
            "id" => "Mendukung proses migrasi sistem dan pengembangan menggunakan Python serta Django.",
            "en" => "Supported system migration processes and development using Python and Django."
        ]
    ],
    [
        "role" => "Computer Technician Intern",
        "company" => "Andi Jaya Computer",
        "period" => "Mar 2021 - Oct 2021",
        "description" => [
            "id" => "Membantu troubleshooting, maintenance, dan perbaikan dasar komputer serta printer.",
            "en" => "Assisted with troubleshooting, maintenance, and basic repairs for computers and printers."
        ]
    ]
];

$projects = [
    [
        "title" => "Urban Mission through Education",
        "subtitle" => "IFES East Asia Funded Project",
        "description" => [
            "id" => "Menjadi team leader pada proyek misi pendidikan dan bimbingan belajar gratis untuk anak-anak sekolah dasar.",
            "en" => "Served as team leader in an education mission project and free tutoring program for elementary school students."
        ],
        "tags" => ["Leadership", "Education", "Community"],
        "link" => "#"
    ],
    [
        "title" => "VR-Based Astronomy Learning Media",
        "subtitle" => "PKM-KI Funded Project",
        "description" => [
            "id" => "Proyek media pembelajaran astronomi berbasis VR untuk siswa sekolah dasar yang memperoleh pendanaan PKM dari Kemendikbudristek.",
            "en" => "A VR-based astronomy learning media project for elementary students funded by the PKM grant from Kemendikbudristek."
        ],
        "tags" => ["VR", "Education", "Innovation"],
        "link" => "#"
    ],
    [
        "title" => "Fingerprint Attendance System",
        "subtitle" => [
            "id" => "Hak Cipta Terdaftar",
            "en" => "Registered Copyright"
        ],
        "description" => [
            "id" => "Sistem absensi fingerprint untuk SMP Al Falah dengan Hak Cipta No. 000931533 dari Kementerian Hukum Republik Indonesia.",
            "en" => "Fingerprint attendance system for SMP Al Falah, registered under Copyright No. 000931533 by the Ministry of Law of the Republic of Indonesia."
        ],
        "tags" => ["System Development", "Attendance", "Copyright"],
        "link" => "#"
    ]
];

$organizations = [
    [
        "name" => "PERKANTAS Surabaya",
        "role" => "Mission Division Coordinator",
        "period" => "Jan 2024 - Present"
    ],
    [
        "name" => "Youth Fellowship of REC Kutisari",
        "role" => "Secretary & Member Care Officer",
        "period" => "2026 - Present"
    ],
    [
        "name" => "UKKK Telkom University",
        "role" => "Leader of UKKK 2025",
        "period" => "2022 - Dec 2025"
    ],
    [
        "name" => "Student Association of Informatics",
        "role" => "Coordinator of Human Resource Development",
        "period" => "2023 - 2024"
    ]
];

$education = [
    "degree" => "Bachelor of Informatics",
    "school" => "Telkom University Surabaya",
    "period" => "2022 - 2025",
    "description" => [
        "id" => "Membangun fondasi kuat pada logical thinking, mathematics, dan problem-solving.",
        "en" => "Built a strong foundation in logical thinking, mathematics, and problem-solving."
    ]
];

$certifications = [
    [
        "id" => "EPrT (English Proficiency Test) - Skor 510, berlaku hingga Mei 2027",
        "en" => "EPrT (English Proficiency Test) - Score 510, valid until May 2027"
    ],
    [
        "id" => "Hak Cipta - Fingerprint Attendance System, No. 000931533",
        "en" => "Copyright - Fingerprint Attendance System, No. 000931533"
    ]
];

$language = isset($_GET['lang']) && in_array($_GET['lang'], ['id', 'en'], true) ? $_GET['lang'] : 'id';
$pageLang = $language === 'en' ? 'en' : 'id';

$texts = [
    "meta_description" => [
        "id" => "Portfolio pribadi {$name} - Lulusan Informatika, Web Developer, Pendidik.",
        "en" => "Personal portfolio of {$name} - Informatics Graduate, Web Developer, Educator."
    ],
    "menu_about" => ["id" => "Tentang", "en" => "About"],
    "menu_skills" => ["id" => "Skill", "en" => "Skills"],
    "menu_experience" => ["id" => "Pengalaman", "en" => "Experience"],
    "menu_projects" => ["id" => "Proyek", "en" => "Projects"],
    "menu_contact" => ["id" => "Kontak", "en" => "Contact"],
    "available" => ["id" => "Terbuka untuk peluang", "en" => "Available for opportunities"],
    "hero_greeting" => ["id" => "Halo, saya", "en" => "Hi, I'm"],
    "hero_intro" => [
        "id" => "Saya berfokus pada pengembangan solusi digital yang rapi, mudah digunakan, dan relevan dengan kebutuhan. Pengalaman saya mencakup bidang teknologi, pendidikan, administrasi, dan pelayanan masyarakat.",
        "en" => "I focus on building digital solutions that are clean, practical, and aligned with real needs. My experience spans technology, education, administration, and community service."
    ],
    "btn_portfolio" => ["id" => "Lihat Produk", "en" => "View Products"],
    "avatar_alt" => ["id" => "Foto profil {$name}", "en" => "Profile photo of {$name}"],
    "avatar_focus" => [
        "id" => "Fokus pada pengembangan web, problem solving, pembelajaran, dan kontribusi nyata melalui teknologi.",
        "en" => "Focused on web development, problem solving, learning, and creating real impact through technology."
    ],
    "about_badge" => ["id" => "Tentang Saya", "en" => "About Me"],
    "about_title" => ["id" => "Latar belakang, minat, dan cara saya bekerja", "en" => "My background, interests, and work approach"],
    "about_subtitle" => [
        "id" => "Bagi saya, teknologi bukan sekadar membangun sistem, tetapi menghadirkan solusi yang membantu pekerjaan, mendukung proses belajar, dan memberi manfaat yang nyata.",
        "en" => "To me, technology is not just about building systems, but about creating solutions that support work, improve learning, and deliver meaningful value."
    ],
    "about_extra" => [
        "id" => "Latar belakang studi saya di Telkom University Surabaya membentuk cara berpikir yang lebih logis, terstruktur, dan teliti. Saya nyaman bekerja dalam tim, terbuka untuk belajar hal baru, dan berusaha memberikan kontribusi yang jelas pada setiap pekerjaan yang saya tangani.",
        "en" => "My academic background at Telkom University Surabaya shaped the way I think in a more logical, structured, and detail-oriented way. I am comfortable working in teams, open to learning new things, and committed to making clear contributions in every role I take on."
    ],
    "field_name" => ["id" => "Nama", "en" => "Name"],
    "field_email" => ["id" => "Email", "en" => "Email"],
    "skills_badge" => ["id" => "Skill", "en" => "Skills"],
    "skills_title" => ["id" => "Kombinasi kemampuan teknis dan soft skills", "en" => "Combination of technical and soft skills"],
    "skills_subtitle" => [
        "id" => "Saya terbiasa memadukan kemampuan teknis dengan komunikasi, tanggung jawab, dan kolaborasi dalam berbagai proyek dan peran organisasi.",
        "en" => "I am used to combining technical skills with communication, responsibility, and collaboration across projects and organizational roles."
    ],
    "exp_badge" => ["id" => "Pengalaman", "en" => "Experience"],
    "exp_title" => ["id" => "Perjalanan profesional dan kontribusi nyata", "en" => "Professional journey and real contributions"],
    "exp_subtitle" => [
        "id" => "Beberapa pengalaman yang membentuk kemampuan saya dalam teknologi, layanan, pendidikan, dan administrasi.",
        "en" => "Selected experiences that shaped my capabilities in technology, service, education, and administration."
    ],
    "portfolio_badge" => ["id" => "Portofolio", "en" => "Portfolio"],
    "portfolio_title" => ["id" => "Proyek, karya, dan pencapaian", "en" => "Projects, works, and achievements"],
    "portfolio_subtitle" => [
        "id" => "Beberapa karya yang menunjukkan minat saya pada pengembangan sistem, pendidikan, inovasi, dan kontribusi sosial.",
        "en" => "Selected works that reflect my interest in system development, education, innovation, and social contribution."
    ],
    "project_visit" => ["id" => "Kunjungi Proyek", "en" => "Visit Project"],
    "project_request" => ["id" => "Detail tersedia upon request", "en" => "Details available upon request"],
    "edu_org_badge" => ["id" => "Pendidikan & Organisasi", "en" => "Education & Organizations"],
    "edu_org_title" => ["id" => "Latar belakang akademik dan kepemimpinan", "en" => "Academic background and leadership"],
    "edu_org_subtitle" => [
        "id" => "Perjalanan saya tidak hanya dibentuk oleh pendidikan formal, tetapi juga oleh organisasi dan pelayanan yang memperkuat karakter dan kepemimpinan.",
        "en" => "My journey is shaped not only by formal education, but also by organizations and service that strengthened character and leadership."
    ],
    "education_title" => ["id" => "Pendidikan", "en" => "Education"],
    "school2_desc" => [
        "id" => "Fokus pada dasar pemrograman, pengembangan perangkat lunak, dan praktik rekayasa sistem.",
        "en" => "Focused on programming fundamentals, software development, and system engineering practices."
    ],
    "cert_title" => ["id" => "Sertifikasi & Pengakuan", "en" => "Certifications & Recognition"],
    "org_title" => ["id" => "Organisasi", "en" => "Organizations"],
    "contact_badge" => ["id" => "Kontak", "en" => "Contact"],
    "contact_title" => ["id" => "Mari terhubung dan berkolaborasi", "en" => "Let's connect and collaborate"],
    "contact_subtitle" => [
        "id" => "Saya terbuka untuk peluang kerja, kolaborasi proyek, maupun diskusi seputar teknologi, pendidikan, dan pengembangan sistem.",
        "en" => "I am open to job opportunities, project collaborations, and discussions about technology, education, and system development."
    ],
    "why_work" => ["id" => "Kenapa bekerja dengan saya?", "en" => "Why work with me?"],
    "why_work_desc" => [
        "id" => "Saya membawa kombinasi antara kemampuan teknis, dedikasi belajar, pengalaman organisasi, dan semangat untuk menyelesaikan masalah secara nyata. Saya juga nyaman bekerja secara mandiri maupun kolaboratif.",
        "en" => "I bring a combination of technical capability, learning dedication, organizational experience, and a practical problem-solving mindset. I am comfortable working independently and collaboratively."
    ],
    "send_message" => ["id" => "Kirim Pesan", "en" => "Send Message"],
    "sending_message" => ["id" => "Mengirim...", "en" => "Sending..."],
    "message_label" => ["id" => "Pesan", "en" => "Message"],
    "phone_label" => ["id" => "Phone", "en" => "Phone"],
    "instagram_label" => ["id" => "Instagram", "en" => "Instagram"],
    "lang_id" => ["id" => "Indonesia", "en" => "Indonesian"],
    "lang_en" => ["id" => "English", "en" => "English"],
    "err_name_required" => ["id" => "Nama wajib diisi.", "en" => "Name is required."],
    "err_name_max" => ["id" => "Nama maksimal 100 karakter.", "en" => "Name must be at most 100 characters."],
    "err_email_required" => ["id" => "Email wajib diisi.", "en" => "Email is required."],
    "err_email_invalid" => ["id" => "Format email tidak valid.", "en" => "Invalid email format."],
    "err_message_required" => ["id" => "Pesan wajib diisi.", "en" => "Message is required."],
    "err_message_max" => ["id" => "Pesan maksimal 2000 karakter.", "en" => "Message must be at most 2000 characters."],
    "err_storage_dir" => ["id" => "Folder penyimpanan pesan tidak dapat dibuat.", "en" => "Could not create message storage directory."],
    "err_save" => ["id" => "Pesan gagal disimpan. Coba lagi.", "en" => "Message could not be saved. Please try again."],
    "ok_saved" => ["id" => "Pesan berhasil dikirim. Terima kasih.", "en" => "Message sent successfully. Thank you."],
    "ajax_error" => [
        "id" => "Terjadi gangguan saat memuat halaman. Silakan coba lagi.",
        "en" => "There was a problem loading the page. Please try again."
    ]
];

$formInput = [
    "sender_name" => "",
    "sender_email" => "",
    "sender_message" => ""
];
$formStatus = [
    "type" => "",
    "text" => ""
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_message'])) {
    $formInput['sender_name'] = trim((string)($_POST['sender_name'] ?? ''));
    $formInput['sender_email'] = trim((string)($_POST['sender_email'] ?? ''));
    $formInput['sender_message'] = trim((string)($_POST['sender_message'] ?? ''));

    $errors = [];

    if ($formInput['sender_name'] === '') {
        $errors[] = $texts["err_name_required"][$pageLang];
    } elseif (mb_strlen($formInput['sender_name']) > 100) {
        $errors[] = $texts["err_name_max"][$pageLang];
    }

    if ($formInput['sender_email'] === '') {
        $errors[] = $texts["err_email_required"][$pageLang];
    } elseif (!filter_var($formInput['sender_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = $texts["err_email_invalid"][$pageLang];
    }

    if ($formInput['sender_message'] === '') {
        $errors[] = $texts["err_message_required"][$pageLang];
    } elseif (mb_strlen($formInput['sender_message']) > 2000) {
        $errors[] = $texts["err_message_max"][$pageLang];
    }

    if (empty($errors)) {
        $storageDir = __DIR__ . DIRECTORY_SEPARATOR . 'data';
        $storageFile = $storageDir . DIRECTORY_SEPARATOR . 'messages.json';

        if (!is_dir($storageDir) && !mkdir($storageDir, 0775, true) && !is_dir($storageDir)) {
            $formStatus = [
                "type" => "error",
                "text" => $texts["err_storage_dir"][$pageLang]
            ];
        } else {
            $messages = [];
            if (is_file($storageFile)) {
                $raw = file_get_contents($storageFile);
                if ($raw !== false && trim($raw) !== '') {
                    $decoded = json_decode($raw, true);
                    if (is_array($decoded)) {
                        $messages = $decoded;
                    }
                }
            }

            $messages[] = [
                "id" => uniqid('msg_', true),
                "name" => $formInput['sender_name'],
                "email" => $formInput['sender_email'],
                "message" => $formInput['sender_message'],
                "created_at" => date('c')
            ];

            $json = json_encode($messages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            if ($json === false || file_put_contents($storageFile, $json . PHP_EOL, LOCK_EX) === false) {
                $formStatus = [
                    "type" => "error",
                    "text" => $texts["err_save"][$pageLang]
                ];
            } else {
                $formStatus = [
                    "type" => "success",
                    "text" => $texts["ok_saved"][$pageLang]
                ];
                $formInput = [
                    "sender_name" => "",
                    "sender_email" => "",
                    "sender_message" => ""
                ];
            }
        }
    } else {
        $formStatus = [
            "type" => "error",
            "text" => implode(' ', $errors)
        ];
    }
}

function h($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function t(array $texts, string $lang, string $key): string {
    if (isset($texts[$key][$lang])) {
        return $texts[$key][$lang];
    }
    return $texts[$key]['id'] ?? $key;
}

$langQuery = '?lang=' . $pageLang;
?>
<!DOCTYPE html>
<html lang="<?= h($pageLang) ?>" data-ajax-error="<?= h(t($texts, $pageLang, 'ajax_error')) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($name) ?> | Portfolio</title>
    <meta name="description" content="<?= h(t($texts, $pageLang, 'meta_description')) ?>">
    <meta name="theme-color" content="#f5f8fc">
    <link rel="icon" type="image/jpeg" href="<?= h($profilePhoto) ?>">
    <link rel="shortcut icon" type="image/jpeg" href="<?= h($profilePhoto) ?>">
    <link rel="apple-touch-icon" href="<?= h($profilePhoto) ?>">
    <link rel="stylesheet" href="assets/site.css?v=31">
</head>
<body>
<div class="ajax-progress" aria-hidden="true"></div>

<div id="site-shell">
    <nav class="navbar">
        <div class="container nav-inner">
            <a class="brand" href="<?= h($langQuery) ?>" data-ajax-link>
                <span class="brand-mark">
                    <img
                        src="<?= h($profilePhoto) ?>"
                        alt="<?= h(t($texts, $pageLang, 'avatar_alt')) ?>"
                        class="brand-mark-photo"
                    >
                </span>
                <span class="brand-text"><?= h($name) ?></span>
            </a>
            <button
                class="nav-toggle"
                type="button"
                aria-expanded="false"
                aria-controls="nav-panel"
                aria-label="Toggle navigation"
            >
                <span class="nav-toggle-line"></span>
                <span class="nav-toggle-line"></span>
                <span class="nav-toggle-line"></span>
            </button>
            <div class="nav-panel" id="nav-panel">
                <div class="menu">
                    <a href="<?= h($langQuery) ?>#about" data-ajax-link><?= h(t($texts, $pageLang, 'menu_about')) ?></a>
                    <a href="<?= h($langQuery) ?>#skills" data-ajax-link><?= h(t($texts, $pageLang, 'menu_skills')) ?></a>
                    <a href="<?= h($langQuery) ?>#experience" data-ajax-link><?= h(t($texts, $pageLang, 'menu_experience')) ?></a>
                    <a href="<?= h($langQuery) ?>#projects" data-ajax-link><?= h(t($texts, $pageLang, 'menu_projects')) ?></a>
                    <a href="<?= h($langQuery) ?>#contact" data-ajax-link><?= h(t($texts, $pageLang, 'menu_contact')) ?></a>
                </div>
                <div class="lang-switch">
                    <a
                        class="lang-btn <?= $pageLang === 'id' ? 'active' : '' ?>"
                        href="?lang=id"
                        data-ajax-link
                        data-preserve-hash
                        aria-label="<?= h(t($texts, $pageLang, 'lang_id')) ?>"
                        title="<?= h(t($texts, $pageLang, 'lang_id')) ?>"
                    >ID</a>
                    <a
                        class="lang-btn <?= $pageLang === 'en' ? 'active' : '' ?>"
                        href="?lang=en"
                        data-ajax-link
                        data-preserve-hash
                        aria-label="<?= h(t($texts, $pageLang, 'lang_en')) ?>"
                        title="<?= h(t($texts, $pageLang, 'lang_en')) ?>"
                    >EN</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="page-main">
        <header class="hero">
            <div class="container hero-wrap">
                <div class="hero-card reveal">
                    <div class="eyebrow"><?= h(t($texts, $pageLang, 'available')) ?></div>
                    <h1>
                        <?= h(t($texts, $pageLang, 'hero_greeting')) ?> <span class="highlight"><?= h($name) ?></span>
                    </h1>
                    <p class="hero-lead">
                        <?= h($title[$pageLang]) ?>. <?= h(t($texts, $pageLang, 'hero_intro')) ?>
                    </p>

                    <div class="hero-actions">
                        <a href="https://lynk.id/natanaelwt" class="btn btn-primary" target="_blank" rel="noopener noreferrer"><?= h(t($texts, $pageLang, 'btn_portfolio')) ?></a>
                    </div>
                </div>

                <div class="hero-aside">
                    <div class="profile-box glass reveal">
                        <div class="avatar">
                            <div class="avatar-photo-wrap">
                                <img
                                    src="<?= h($profilePhoto) ?>"
                                    alt="<?= h(t($texts, $pageLang, 'avatar_alt')) ?>"
                                    class="avatar-photo"
                                    onerror="this.style.display='none';this.nextElementSibling.style.display='grid';"
                                >
                                <div class="avatar-circle" style="display:none;">
                                    <?= strtoupper(substr($name, 0, 1)) . strtoupper(substr(explode(' ', $name)[1] ?? '', 0, 1)) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

<section id="about">
    <div class="container">
        <div class="section-head reveal">
            <span><?= h(t($texts, $pageLang, 'about_badge')) ?></span>
            <h2><?= h(t($texts, $pageLang, 'about_title')) ?></h2>
            <p>
                <?= h(t($texts, $pageLang, 'about_subtitle')) ?>
            </p>
        </div>

        <div class="about-grid">
            <div class="card reveal about-copy">
                <p><?= h($about[$pageLang]) ?></p>
                <p>
                    <?= h(t($texts, $pageLang, 'about_extra')) ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="skills">
    <div class="container">
        <div class="section-head reveal">
            <span><?= h(t($texts, $pageLang, 'skills_badge')) ?></span>
            <h2><?= h(t($texts, $pageLang, 'skills_title')) ?></h2>
            <p>
                <?= h(t($texts, $pageLang, 'skills_subtitle')) ?>
            </p>
        </div>

        <div class="card reveal">
            <div class="skill-grid">
                <?php foreach ($skills as $skill): ?>
                    <div class="skill-item"><?= h($skill) ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="experience">
    <div class="container">
        <div class="section-head reveal">
            <span><?= h(t($texts, $pageLang, 'exp_badge')) ?></span>
            <h2><?= h(t($texts, $pageLang, 'exp_title')) ?></h2>
            <p>
                <?= h(t($texts, $pageLang, 'exp_subtitle')) ?>
            </p>
        </div>

        <div class="timeline">
            <?php foreach ($experiences as $experience): ?>
                <div class="card timeline-item reveal">
                    <h3><?= h($experience['role']) ?> - <?= h($experience['company']) ?></h3>
                    <div class="timeline-meta"><?= h($experience['period']) ?></div>
                    <p><?= h($experience['description'][$pageLang]) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="projects">
    <div class="container">
        <div class="section-head reveal">
            <span><?= h(t($texts, $pageLang, 'portfolio_badge')) ?></span>
            <h2><?= h(t($texts, $pageLang, 'portfolio_title')) ?></h2>
            <p>
                <?= h(t($texts, $pageLang, 'portfolio_subtitle')) ?>
            </p>
        </div>

        <div class="project-grid">
            <?php foreach ($projects as $project): ?>
                <div class="card project-card reveal">
                    <div class="project-top">
                        <div>
                            <small><?= h(is_array($project['subtitle']) ? $project['subtitle'][$pageLang] : $project['subtitle']) ?></small>
                            <h3><?= h($project['title']) ?></h3>
                        </div>
                    </div>

                    <p><?= h($project['description'][$pageLang]) ?></p>

                    <div class="tag-wrap">
                        <?php foreach ($project['tags'] as $tag): ?>
                            <span class="tag"><?= h($tag) ?></span>
                        <?php endforeach; ?>
                    </div>

                    <?php if (!empty($project['link']) && $project['link'] !== '#'): ?>
                        <a class="project-link" href="<?= h($project['link']) ?>" target="_blank" rel="noopener noreferrer">
                            <?= h(t($texts, $pageLang, 'project_visit')) ?> &rarr;
                        </a>
                    <?php else: ?>
                        <span class="project-link project-link-muted"><?= h(t($texts, $pageLang, 'project_request')) ?></span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="education">
    <div class="container">
        <div class="section-head reveal">
            <span><?= h(t($texts, $pageLang, 'edu_org_badge')) ?></span>
            <h2><?= h(t($texts, $pageLang, 'edu_org_title')) ?></h2>
            <p>
                <?= h(t($texts, $pageLang, 'edu_org_subtitle')) ?>
            </p>
        </div>

        <div class="two-col">
            <div class="card reveal">
                <h3 class="info-title"><?= h(t($texts, $pageLang, 'education_title')) ?></h3>
                <ul class="list-clean">
                    <li>
                        <strong><?= h($education['degree']) ?></strong>
                        <span class="muted"><?= h($education['school']) ?> | <?= h($education['period']) ?></span><br>
                        <span class="muted"><?= h($education['description'][$pageLang]) ?></span>
                    </li>
                    <li>
                        <strong>Software Engineering</strong>
                        <span class="muted">SMKN 1 Palangkaraya | 2019 - 2022</span><br>
                        <span class="muted"><?= h(t($texts, $pageLang, 'school2_desc')) ?></span>
                    </li>
                </ul>

                <h3 class="section-gap"><?= h(t($texts, $pageLang, 'cert_title')) ?></h3>
                <ul class="list-clean">
                    <?php foreach ($certifications as $certification): ?>
                        <li><span class="muted"><?= h($certification[$pageLang]) ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="card reveal">
                <h3 class="info-title"><?= h(t($texts, $pageLang, 'org_title')) ?></h3>
                <ul class="list-clean">
                    <?php foreach ($organizations as $organization): ?>
                        <li>
                            <strong><?= h($organization['name']) ?></strong>
                            <span class="muted"><?= h($organization['role']) ?></span><br>
                            <span class="muted"><?= h($organization['period']) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="section-head reveal">
            <span><?= h(t($texts, $pageLang, 'contact_badge')) ?></span>
            <h2><?= h(t($texts, $pageLang, 'contact_title')) ?></h2>
            <p>
                <?= h(t($texts, $pageLang, 'contact_subtitle')) ?>
            </p>
        </div>

        <div class="contact-wrap">
            <div class="card contact-box reveal">
                <h3><?= h(t($texts, $pageLang, 'why_work')) ?></h3>
                <p class="muted">
                    <?= h(t($texts, $pageLang, 'why_work_desc')) ?>
                </p>

                <form method="post" action="<?= h($langQuery) ?>#contact" class="contact-form" data-ajax-form>
                    <?php if ($formStatus['text'] !== ''): ?>
                        <div class="form-status <?= h($formStatus['type']) ?>" role="status" tabindex="-1">
                            <?= h($formStatus['text']) ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-row">
                        <div class="form-field">
                            <label for="sender_name"><?= h(t($texts, $pageLang, 'field_name')) ?></label>
                            <input type="text" id="sender_name" name="sender_name" maxlength="100" required value="<?= h($formInput['sender_name']) ?>">
                        </div>
                        <div class="form-field">
                            <label for="sender_email"><?= h(t($texts, $pageLang, 'field_email')) ?></label>
                            <input type="email" id="sender_email" name="sender_email" required value="<?= h($formInput['sender_email']) ?>">
                        </div>
                    </div>

                    <div class="form-field">
                        <label for="sender_message"><?= h(t($texts, $pageLang, 'message_label')) ?></label>
                        <textarea id="sender_message" name="sender_message" maxlength="2000" required><?= h($formInput['sender_message']) ?></textarea>
                    </div>

                    <button
                        type="submit"
                        name="send_message"
                        value="1"
                        class="btn btn-primary form-submit"
                        data-loading-label="<?= h(t($texts, $pageLang, 'sending_message')) ?>"
                    ><?= h(t($texts, $pageLang, 'send_message')) ?></button>
                </form>
            </div>

            <div class="card reveal">
                <ul class="contact-list">
                    <li class="contact-item contact-item-email">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M4.75 7.25h14.5a1.5 1.5 0 0 1 1.5 1.5v6.5a1.5 1.5 0 0 1-1.5 1.5H4.75a1.5 1.5 0 0 1-1.5-1.5v-6.5a1.5 1.5 0 0 1 1.5-1.5Z" />
                                <path d="m4 8.5 8 5.5 8-5.5" />
                            </svg>
                        </span>
                        <strong>Email</strong>
                        <a class="contact-value" href="mailto:<?= h($email) ?>"><?= h($email) ?></a>
                    </li>
                    <li class="contact-item contact-item-phone">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M7.2 4.75h2.1c.42 0 .79.29.89.69l.62 2.51a1 1 0 0 1-.24.92l-1.24 1.28a12.57 12.57 0 0 0 4.52 4.52l1.28-1.24a1 1 0 0 1 .92-.24l2.51.62c.4.1.69.47.69.89v2.1c0 .55-.45 1-1 1H17.3C10.88 18.8 5.2 13.12 5.2 6.7V5.75c0-.55.45-1 1-1Z" />
                            </svg>
                        </span>
                        <strong><?= h(t($texts, $pageLang, 'phone_label')) ?></strong>
                        <a class="contact-value" href="tel:<?= h(str_replace([' ', '(', ')'], '', $phone)) ?>"><?= h($phone) ?></a>
                    </li>
                    <li class="contact-item contact-item-linkedin">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <circle cx="7.2" cy="7.4" r="1.15" fill="currentColor" stroke="none" />
                                <path d="M6.25 10.5v6.25" />
                                <path d="M10.75 16.75V10.5" />
                                <path d="M10.75 13.1c0-1.62 1.05-2.6 2.44-2.6 1.43 0 2.31.92 2.31 2.84v3.41" />
                            </svg>
                        </span>
                        <strong>LinkedIn</strong>
                        <a class="contact-value" href="<?= h($linkedin) ?>" target="_blank" rel="noopener noreferrer">@<?= h($linkedinUsername) ?></a>
                    </li>
                    <li class="contact-item contact-item-github">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <circle cx="8" cy="6.5" r="1.75" />
                                <circle cx="16" cy="6.5" r="1.75" />
                                <circle cx="16" cy="17.5" r="1.75" />
                                <path d="M8 8.25v4.25a3 3 0 0 0 3 3H14.25" />
                                <path d="M16 8.25v7.5" />
                            </svg>
                        </span>
                        <strong>GitHub</strong>
                        <a class="contact-value" href="<?= h($github) ?>" target="_blank" rel="noopener noreferrer">@<?= h($githubUsername) ?></a>
                    </li>
                    <?php if ($instagram !== '#'): ?>
                        <li class="contact-item contact-item-instagram">
                            <span class="contact-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <rect x="5.25" y="5.25" width="13.5" height="13.5" rx="4" />
                                    <circle cx="12" cy="12" r="3.1" />
                                    <circle cx="16.45" cy="7.75" r="1.05" fill="currentColor" stroke="none" />
                                </svg>
                            </span>
                            <strong><?= h(t($texts, $pageLang, 'instagram_label')) ?></strong>
                            <a class="contact-value" href="<?= h($instagram) ?>" target="_blank" rel="noopener noreferrer"><?= h($instagram) ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

    </main>

    <footer>
        <div class="container">
            &copy; <?= date('Y') ?> <?= h($name) ?>.
        </div>
    </footer>
</div>

<script src="assets/app.js?v=4"></script>

</body>
</html>
