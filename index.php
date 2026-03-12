<?php
$name = "Natanael Wijaya Tiono";
$title = [
    "id" => "Lulusan Informatika | Antusias PHP | Pendidik",
    "en" => "Informatics Graduate | PHP Enthusiast | Educator"
];
$email = "natanaelhdxd25@gmail.com";
$phone = "+62 82158114721";
$location = "Surabaya, Indonesia";
$birthDate = "25 January 2004";
$github = "https://github.com/NatanaelWT";
$linkedin = "https://www.linkedin.com/in/natanael-wijaya-tiono-31a76925b";
$instagram = "#";
$profilePhoto = "assets/profile.jpg";
$githubUsername = "NatanaelWT";
$linkedinUsername = "Natanael Wijaya Tiono";

$about = [
    "id" => "Saya adalah lulusan Informatika yang memiliki minat besar pada pengembangan web, pemecahan masalah, dan pembelajaran berkelanjutan. Saya memiliki pengalaman di bidang administrasi, pengajaran, dukungan teknis komputer, serta internship pemrograman menggunakan Python dan Django. Saya juga aktif dalam organisasi, pengabdian masyarakat, dan proyek pendidikan berbasis teknologi.",
    "en" => "I am an Informatics graduate with strong interest in web development, problem solving, and continuous learning. I have experience in administration, teaching, computer technical support, and programming internships using Python and Django. I am also active in organizations, community service, and technology-based education projects."
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
        "id" => "Portfolio pribadi {$name} - Lulusan Informatika, Antusias PHP, Pendidik.",
        "en" => "Personal portfolio of {$name} - Informatics Graduate, PHP Enthusiast, Educator."
    ],
    "menu_about" => ["id" => "Tentang", "en" => "About"],
    "menu_skills" => ["id" => "Skill", "en" => "Skills"],
    "menu_experience" => ["id" => "Pengalaman", "en" => "Experience"],
    "menu_projects" => ["id" => "Proyek", "en" => "Projects"],
    "menu_contact" => ["id" => "Kontak", "en" => "Contact"],
    "available" => ["id" => "Terbuka untuk peluang", "en" => "Available for opportunities"],
    "hero_greeting" => ["id" => "Halo, saya", "en" => "Hi, I'm"],
    "hero_intro" => [
        "id" => "Saya membangun solusi digital yang rapi, fungsional, dan berdampak, dengan kombinasi pengalaman di bidang teknologi, pendidikan, administrasi, dan pelayanan masyarakat.",
        "en" => "I build digital solutions that are clean, functional, and impactful, combining experience in technology, education, administration, and community service."
    ],
    "btn_portfolio" => ["id" => "Lihat Portofolio", "en" => "View Portfolio"],
    "btn_contact" => ["id" => "Hubungi Saya", "en" => "Contact Me"],
    "chip_grad" => ["id" => "Lulusan Informatika", "en" => "Informatics Graduate"],
    "avatar_alt" => ["id" => "Foto profil {$name}", "en" => "Profile photo of {$name}"],
    "avatar_focus" => [
        "id" => "Fokus pada pengembangan web, problem solving, pembelajaran, dan kontribusi nyata melalui teknologi.",
        "en" => "Focused on web development, problem solving, learning, and creating real impact through technology."
    ],
    "about_badge" => ["id" => "Tentang Saya", "en" => "About Me"],
    "about_title" => ["id" => "Personal branding yang profesional, hangat, dan relevan", "en" => "Professional, warm, and relevant personal branding"],
    "about_subtitle" => [
        "id" => "Saya percaya bahwa teknologi bukan hanya tentang sistem yang berjalan, tetapi juga tentang solusi yang membantu manusia bekerja, belajar, dan bertumbuh lebih baik.",
        "en" => "I believe technology is not only about working systems, but also about solutions that help people work, learn, and grow better."
    ],
    "about_extra" => [
        "id" => "Dengan latar belakang Informatika dari Telkom University Surabaya, saya terbiasa berpikir logis, menganalisis masalah, dan mengembangkan solusi yang terstruktur. Saya juga menikmati bekerja dalam tim, belajar hal baru dengan cepat, dan berkontribusi pada proyek yang memberi dampak nyata.",
        "en" => "With an Informatics background from Telkom University Surabaya, I am used to logical thinking, problem analysis, and building structured solutions. I also enjoy teamwork, learning new things quickly, and contributing to projects with real impact."
    ],
    "brief_info" => ["id" => "Informasi Singkat", "en" => "Quick Info"],
    "field_name" => ["id" => "Nama", "en" => "Name"],
    "field_email" => ["id" => "Email", "en" => "Email"],
    "field_location" => ["id" => "Lokasi", "en" => "Location"],
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
    "message_label" => ["id" => "Pesan", "en" => "Message"],
    "contact_details" => ["id" => "Detail Kontak", "en" => "Contact Details"],
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
    "ok_saved" => ["id" => "Pesan berhasil dikirim. Terima kasih.", "en" => "Message sent successfully. Thank you."]
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
<html lang="<?= h($pageLang) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($name) ?> - Portfolio</title>
    <meta name="description" content="<?= h(t($texts, $pageLang, 'meta_description')) ?>">
    <link rel="icon" type="image/jpeg" href="<?= h($profilePhoto) ?>">
    <link rel="shortcut icon" type="image/jpeg" href="<?= h($profilePhoto) ?>">
    <link rel="apple-touch-icon" href="<?= h($profilePhoto) ?>">
    <style>
        :root{
            --bg:#09161f;
            --bg-soft:#102433;
            --card:rgba(255,255,255,0.06);
            --card-strong:rgba(255,255,255,0.1);
            --card-border:rgba(255,255,255,0.14);
            --text:#edf5ff;
            --muted:#a8bbcf;
            --primary:#41c2a5;
            --primary-soft:#79e2cb;
            --secondary:#f29b65;
            --accent:#8fe97c;
            --shadow:0 22px 52px rgba(1, 11, 20, .38);
            --radius:20px;
            --max:1200px;
        }

        *{box-sizing:border-box}
        html{scroll-behavior:smooth}
        body{
            margin:0;
            font-family:"Trebuchet MS","Segoe UI Variable","Segoe UI",sans-serif;
            color:var(--text);
            line-height:1.65;
            background:
                radial-gradient(circle at 10% 5%, rgba(65,194,165,.18), transparent 26%),
                radial-gradient(circle at 90% 15%, rgba(242,155,101,.16), transparent 24%),
                radial-gradient(circle at 70% 100%, rgba(143,233,124,.1), transparent 24%),
                linear-gradient(180deg, #07121a 0%, #0b1a26 50%, #0f2332 100%);
        }

        a{color:inherit;text-decoration:none}
        img{max-width:100%}
        section{padding:48px 0;scroll-margin-top:84px}

        .container{
            width:min(92%, var(--max));
            margin:auto;
        }

        .navbar{
            position:sticky;
            top:0;
            z-index:99;
            backdrop-filter:blur(14px);
            background:rgba(8,20,30,.76);
            border-bottom:1px solid rgba(255,255,255,.1);
        }

        .nav-inner{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:20px;
            padding:16px 0;
        }

        .nav-panel{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:16px;
            flex:1;
            min-width:0;
        }

        .brand{
            font-weight:800;
            letter-spacing:.3px;
            font-size:1.08rem;
            white-space:nowrap;
        }

        .brand span{color:var(--primary-soft)}

        .nav-toggle{
            display:none;
            width:44px;
            height:44px;
            border-radius:12px;
            border:1px solid rgba(255,255,255,.2);
            background:rgba(255,255,255,.04);
            padding:0;
            cursor:pointer;
            color:var(--text);
            align-items:center;
            justify-content:center;
            gap:4px;
            flex-direction:column;
        }

        .nav-toggle-line{
            width:18px;
            height:2px;
            border-radius:99px;
            background:currentColor;
            transition:.25s ease;
        }

        .nav-toggle[aria-expanded="true"] .nav-toggle-line:nth-child(1){
            transform:translateY(6px) rotate(45deg);
        }

        .nav-toggle[aria-expanded="true"] .nav-toggle-line:nth-child(2){
            opacity:0;
        }

        .nav-toggle[aria-expanded="true"] .nav-toggle-line:nth-child(3){
            transform:translateY(-6px) rotate(-45deg);
        }

        .menu{
            display:flex;
            align-items:center;
            gap:8px;
            flex-wrap:wrap;
        }

        .menu a{
            color:var(--muted);
            font-size:.92rem;
            font-weight:600;
            padding:8px 12px;
            border-radius:999px;
            transition:.25s ease;
        }

        .menu a:hover{
            color:#fff;
            background:rgba(255,255,255,.08);
        }

        .lang-switch{
            display:flex;
            align-items:center;
            gap:8px;
        }

        .lang-btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            padding:7px 12px;
            border-radius:999px;
            border:1px solid rgba(255,255,255,.22);
            color:var(--muted);
            font-size:.82rem;
            font-weight:700;
            transition:.2s ease;
        }

        .lang-btn:hover{
            color:#fff;
            border-color:rgba(255,255,255,.45);
        }

        .lang-btn.active{
            color:#042a2f;
            border-color:transparent;
            background:linear-gradient(135deg, var(--primary-soft), #ffd3b6);
        }

        .btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            padding:12px 22px;
            border-radius:999px;
            border:1px solid transparent;
            font-weight:700;
            transition:.28s ease;
        }

        .btn-primary{
            background:linear-gradient(135deg, var(--primary), #2f9f88 54%, var(--secondary));
            color:#052328;
            box-shadow:0 14px 30px rgba(0,0,0,.26);
        }

        .btn-primary:hover{
            transform:translateY(-2px);
            box-shadow:0 18px 38px rgba(0,0,0,.32);
        }

        .btn-outline{
            border-color:rgba(255,255,255,.24);
            background:rgba(255,255,255,.03);
            color:#fff;
        }

        .btn-outline:hover{
            background:rgba(255,255,255,.1);
            transform:translateY(-2px);
        }

        .hero{
            padding:90px 0 56px;
        }

        .hero-wrap{
            display:grid;
            grid-template-columns:1.2fr .8fr;
            gap:28px;
            align-items:stretch;
        }

        .hero-card,
        .glass,
        .card{
            background:linear-gradient(165deg, rgba(255,255,255,.08), rgba(255,255,255,.03));
            border:1px solid var(--card-border);
            border-radius:var(--radius);
            box-shadow:var(--shadow);
            backdrop-filter:blur(12px);
        }

        .hero-card{padding:40px}
        .card{padding:26px}

        .eyebrow{
            display:inline-block;
            padding:8px 13px;
            border-radius:999px;
            border:1px solid rgba(121,226,203,.34);
            background:rgba(65,194,165,.12);
            color:#d7fff4;
            font-size:.86rem;
            margin-bottom:18px;
        }

        h1{
            margin:0 0 14px;
            font-size:clamp(2.2rem, 5.2vw, 4.2rem);
            line-height:1.07;
            letter-spacing:-.02em;
        }

        .highlight{
            background:linear-gradient(135deg, #e8fff8, var(--primary-soft), #ffd3b6);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
            background-clip:text;
            color:transparent;
        }

        .hero p{
            color:var(--muted);
            margin:0 0 22px;
            max-width:690px;
        }

        .hero-actions{
            display:flex;
            flex-wrap:wrap;
            gap:12px;
            margin-bottom:24px;
        }

        .quick-info{
            display:flex;
            flex-wrap:wrap;
            gap:10px;
        }

        .chip{
            padding:9px 14px;
            border-radius:999px;
            background:rgba(255,255,255,.05);
            border:1px solid rgba(255,255,255,.1);
            color:#d9e9fb;
            font-size:.9rem;
        }

        .profile-box{
            padding:24px;
            position:relative;
            overflow:hidden;
        }

        .profile-box::before{
            content:"";
            position:absolute;
            width:220px;
            height:220px;
            right:-70px;
            bottom:-70px;
            border-radius:50%;
            background:radial-gradient(circle, rgba(121,226,203,.3), transparent 70%);
        }

        .avatar{
            width:100%;
            min-height:360px;
            border-radius:18px;
            border:1px solid rgba(255,255,255,.12);
            padding:28px;
            text-align:center;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            background:
                linear-gradient(155deg, rgba(65,194,165,.18), rgba(242,155,101,.16)),
                rgba(255,255,255,.02);
        }

        .avatar-photo-wrap{
            width:186px;
            height:186px;
            margin-bottom:16px;
            border-radius:50%;
            padding:6px;
            background:linear-gradient(140deg, #b4ffe9, #86f2d8 55%, #ffd8c0);
            box-shadow:0 12px 26px rgba(0,0,0,.24);
        }

        .avatar-photo{
            width:100%;
            height:100%;
            border-radius:50%;
            object-fit:cover;
            object-position:center top;
            border:2px solid rgba(7,53,59,.2);
            display:block;
        }

        .avatar-circle{
            width:112px;
            height:112px;
            display:grid;
            place-items:center;
            border-radius:50%;
            font-size:2.4rem;
            font-weight:800;
            color:#07353b;
            background:linear-gradient(140deg, #b4ffe9, #86f2d8 55%, #ffd8c0);
            margin:0 auto;
            box-shadow:none;
        }

        .avatar h3{
            margin:0;
            font-size:1.42rem;
        }

        .avatar p{
            margin:6px 0 0;
            color:var(--muted);
        }

        .avatar-note{
            margin-top:18px;
            max-width:420px;
        }

        .section-gap{
            margin-top:24px;
        }

        .contact-actions{
            margin-top:22px;
        }

        .contact-form{
            margin-top:18px;
            display:grid;
            gap:12px;
        }

        .form-row{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:12px;
        }

        .form-field{
            display:grid;
            gap:6px;
        }

        .form-field label{
            font-size:.9rem;
            font-weight:700;
            color:#dff2ff;
        }

        .form-field input,
        .form-field textarea{
            width:100%;
            border:1px solid rgba(255,255,255,.18);
            background:rgba(255,255,255,.05);
            color:var(--text);
            border-radius:12px;
            padding:11px 12px;
            font:inherit;
            outline:none;
        }

        .form-field textarea{
            resize:vertical;
            min-height:120px;
        }

        .form-field input:focus,
        .form-field textarea:focus{
            border-color:rgba(121,226,203,.7);
            box-shadow:0 0 0 3px rgba(121,226,203,.15);
        }

        .form-status{
            padding:10px 12px;
            border-radius:12px;
            font-size:.92rem;
            border:1px solid transparent;
        }

        .form-status.success{
            color:#d8ffe9;
            background:rgba(67,193,132,.2);
            border-color:rgba(67,193,132,.45);
        }

        .form-status.error{
            color:#ffd7d7;
            background:rgba(206,79,79,.2);
            border-color:rgba(206,79,79,.45);
        }

        .form-submit{
            justify-self:start;
        }

        .section-head{
            margin-bottom:22px;
        }

        .section-head span{
            color:var(--primary-soft);
            font-weight:800;
            text-transform:uppercase;
            letter-spacing:.12em;
            font-size:.78rem;
        }

        .section-head h2{
            margin:10px 0 8px;
            font-size:clamp(1.7rem, 3.1vw, 2.5rem);
            line-height:1.2;
        }

        .section-head p{
            color:var(--muted);
            max-width:760px;
            margin:0;
        }

        .about-grid{
            display:grid;
            grid-template-columns:1.15fr .85fr;
            gap:20px;
        }

        .info-title{
            margin-top:0;
        }

        .card p:last-child{margin-bottom:0}

        .skill-grid{
            display:grid;
            grid-template-columns:repeat(4, 1fr);
            gap:12px;
        }

        .skill-item{
            padding:14px 15px;
            text-align:center;
            border-radius:14px;
            background:rgba(255,255,255,.05);
            border:1px solid rgba(255,255,255,.1);
            color:#eaf5ff;
            font-weight:600;
            font-size:.92rem;
        }

        .timeline{
            display:grid;
            gap:16px;
        }

        .timeline-item{
            position:relative;
            padding:20px 20px 20px 24px;
            border-left:3px solid rgba(121,226,203,.52);
        }

        .timeline-item::before{
            content:"";
            position:absolute;
            left:-8px;
            top:25px;
            width:13px;
            height:13px;
            border-radius:50%;
            background:linear-gradient(145deg, var(--primary-soft), var(--secondary));
            box-shadow:0 0 0 5px rgba(121,226,203,.12);
        }

        .timeline-item h3{
            margin:0 0 6px;
            font-size:1.12rem;
        }

        .timeline-meta{
            color:var(--primary-soft);
            font-size:.9rem;
            font-weight:700;
            margin-bottom:8px;
        }

        .timeline-item p{
            margin:0;
            color:var(--muted);
        }

        .project-grid{
            display:grid;
            grid-template-columns:repeat(2, 1fr);
            gap:18px;
        }

        .project-card{
            display:flex;
            flex-direction:column;
            gap:12px;
            height:100%;
        }

        .project-top{
            display:flex;
            justify-content:space-between;
            gap:12px;
        }

        .project-card small{
            color:var(--primary-soft);
            font-weight:800;
        }

        .project-card h3{
            margin:0;
            font-size:1.16rem;
        }

        .project-card p{
            margin:0;
            color:var(--muted);
        }

        .tag-wrap{
            display:flex;
            flex-wrap:wrap;
            gap:8px;
        }

        .tag{
            display:inline-block;
            padding:7px 11px;
            border-radius:999px;
            background:rgba(143,233,124,.12);
            border:1px solid rgba(143,233,124,.24);
            color:#dcffcf;
            font-size:.8rem;
            font-weight:700;
        }

        .project-link{
            margin-top:auto;
            display:inline-flex;
            align-items:center;
            gap:6px;
            color:#fff;
            font-weight:700;
            width:max-content;
        }

        .project-link:hover{
            color:var(--primary-soft);
        }

        .project-link-muted{
            opacity:.75;
        }

        .two-col{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:20px;
        }

        .list-clean{
            list-style:none;
            margin:0;
            padding:0;
            display:grid;
            gap:12px;
        }

        .list-clean li{
            padding:14px 16px;
            border-radius:14px;
            background:rgba(255,255,255,.04);
            border:1px solid rgba(255,255,255,.08);
        }

        .list-clean strong{
            display:block;
            margin-bottom:4px;
            font-size:.98rem;
        }

        .muted{
            color:var(--muted);
        }

        .contact-wrap{
            display:grid;
            grid-template-columns:1.1fr .9fr;
            gap:20px;
        }

        .contact-box h3,
        .contact-title{
            margin-top:0;
        }

        .contact-list{
            list-style:none;
            margin:20px 0 0;
            padding:0;
            display:grid;
            gap:10px;
        }

        .contact-list li{
            padding:13px 15px;
            border-radius:14px;
            background:rgba(255,255,255,.04);
            border:1px solid rgba(255,255,255,.08);
        }

        .contact-list a:hover{
            color:var(--primary-soft);
        }

        .contact-list a{
            overflow-wrap:anywhere;
        }

        footer{
            padding:28px 0 40px;
            text-align:center;
            color:var(--muted);
        }

        .reveal{
            opacity:0;
            transform:translateY(22px);
            transition:opacity .7s ease, transform .7s ease;
        }

        .reveal.show{
            opacity:1;
            transform:none;
        }

        @media (max-width: 1080px){
            .hero-wrap,
            .about-grid,
            .contact-wrap,
            .two-col{
                grid-template-columns:1fr;
            }

            .skill-grid{
                grid-template-columns:repeat(3, 1fr);
            }

            .project-grid{
                grid-template-columns:1fr;
            }
        }

        @media (max-width: 780px){
            .hero{
                padding-top:60px;
            }

            .brand{
                font-size:1rem;
            }

            .nav-inner{
                display:grid;
                grid-template-columns:1fr auto;
                align-items:center;
                gap:10px;
                padding:12px 0;
            }

            .nav-toggle{
                display:flex;
            }

            .nav-panel{
                grid-column:1 / -1;
                display:flex;
                flex-direction:column;
                align-items:stretch;
                gap:10px;
                padding:10px;
                border-radius:14px;
                border:1px solid rgba(255,255,255,.12);
                background:rgba(6,17,26,.82);
            }

            body.nav-ready .nav-panel{
                display:none;
            }

            body.nav-ready .nav-panel.open{
                display:flex;
            }

            .menu{
                width:100%;
                gap:6px;
                flex-direction:column;
                align-items:stretch;
                overflow:visible;
            }

            .menu::-webkit-scrollbar{
                display:none;
            }

            .menu a{
                font-size:.88rem;
                padding:10px 12px;
                border-radius:10px;
                white-space:normal;
                width:100%;
            }

            .hero-card,
            .profile-box,
            .card{
                padding:20px;
            }

            .skill-grid{
                grid-template-columns:1fr;
            }

            .avatar{
                min-height:300px;
            }

            .hero-actions{
                flex-direction:column;
                align-items:stretch;
            }

            .btn{
                width:100%;
            }

            .form-row{
                grid-template-columns:1fr;
            }

            .form-submit{
                width:100%;
            }

            .lang-switch{
                width:100%;
                justify-content:flex-start;
                overflow:visible;
            }

            .lang-btn{
                flex:0 0 auto;
                text-align:center;
            }

            h1{
                font-size:clamp(1.8rem, 10vw, 2.7rem);
            }

            .section-head h2{
                font-size:clamp(1.45rem, 7vw, 2rem);
            }
        }

        @media (max-width: 520px){
            .navbar{
                border-bottom-color:rgba(255,255,255,.08);
            }

            section{
                padding:40px 0;
            }

            .container{
                width:min(94%, var(--max));
            }

            .hero{
                padding-top:54px;
            }

            .nav-inner{
                gap:8px;
                padding:10px 0;
            }

            .brand{
                font-size:.95rem;
            }

            .hero-card,
            .profile-box,
            .card{
                padding:16px;
            }

            .chip{
                width:100%;
                text-align:center;
            }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="container nav-inner">
        <div class="brand"><?= h($name) ?></div>
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
                <a href="<?= h($langQuery) ?>#about"><?= h(t($texts, $pageLang, 'menu_about')) ?></a>
                <a href="<?= h($langQuery) ?>#skills"><?= h(t($texts, $pageLang, 'menu_skills')) ?></a>
                <a href="<?= h($langQuery) ?>#experience"><?= h(t($texts, $pageLang, 'menu_experience')) ?></a>
                <a href="<?= h($langQuery) ?>#projects"><?= h(t($texts, $pageLang, 'menu_projects')) ?></a>
                <a href="<?= h($langQuery) ?>#contact"><?= h(t($texts, $pageLang, 'menu_contact')) ?></a>
            </div>
            <div class="lang-switch">
                <a class="lang-btn <?= $pageLang === 'id' ? 'active' : '' ?>" href="?lang=id"><?= h(t($texts, $pageLang, 'lang_id')) ?></a>
                <a class="lang-btn <?= $pageLang === 'en' ? 'active' : '' ?>" href="?lang=en"><?= h(t($texts, $pageLang, 'lang_en')) ?></a>
            </div>
        </div>
    </div>
</nav>

<header class="hero">
    <div class="container hero-wrap">
        <div class="hero-card reveal">
            <div class="eyebrow"><?= h(t($texts, $pageLang, 'available')) ?></div>
            <h1>
                <?= h(t($texts, $pageLang, 'hero_greeting')) ?> <span class="highlight"><?= h($name) ?></span>
            </h1>
            <p>
                <?= h($title[$pageLang]) ?>. <?= h(t($texts, $pageLang, 'hero_intro')) ?>
            </p>

            <div class="hero-actions">
                <a href="<?= h($langQuery) ?>#projects" class="btn btn-primary"><?= h(t($texts, $pageLang, 'btn_portfolio')) ?></a>
                <a href="<?= h($langQuery) ?>#contact" class="btn btn-outline"><?= h(t($texts, $pageLang, 'btn_contact')) ?></a>
            </div>

            <div class="quick-info">
                <div class="chip">&#128205; <?= h($location) ?></div>
                <div class="chip">&#127891; <?= h(t($texts, $pageLang, 'chip_grad')) ?></div>
                <div class="chip">&#128161; PHP, Python</div>
            </div>
        </div>

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
                <h3><?= h($name) ?></h3>
                <p><?= h($title[$pageLang]) ?></p>
                <p class="avatar-note">
                    <?= h(t($texts, $pageLang, 'avatar_focus')) ?>
                </p>
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
            <div class="card reveal">
                <p><?= h($about[$pageLang]) ?></p>
                <p>
                    <?= h(t($texts, $pageLang, 'about_extra')) ?>
                </p>
            </div>

            <div class="card reveal">
                <h3 class="info-title"><?= h(t($texts, $pageLang, 'brief_info')) ?></h3>
                <ul class="list-clean">
                    <li><strong><?= h(t($texts, $pageLang, 'field_name')) ?></strong><span class="muted"><?= h($name) ?></span></li>
                    <li><strong><?= h(t($texts, $pageLang, 'field_email')) ?></strong><span class="muted"><?= h($email) ?></span></li>
                    <li><strong><?= h(t($texts, $pageLang, 'field_location')) ?></strong><span class="muted"><?= h($location) ?></span></li>
                </ul>
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

                <form method="post" action="<?= h($langQuery) ?>#contact" class="contact-form">
                    <?php if ($formStatus['text'] !== ''): ?>
                        <div class="form-status <?= h($formStatus['type']) ?>">
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

                    <button type="submit" name="send_message" value="1" class="btn btn-primary form-submit"><?= h(t($texts, $pageLang, 'send_message')) ?></button>
                </form>
            </div>

            <div class="card reveal">
                <h3 class="contact-title"><?= h(t($texts, $pageLang, 'contact_details')) ?></h3>
                <ul class="contact-list">
                    <li><strong>Email:</strong><br><a href="mailto:<?= h($email) ?>"><?= h($email) ?></a></li>
                    <li><strong><?= h(t($texts, $pageLang, 'phone_label')) ?>:</strong><br><a href="tel:<?= h(str_replace([' ', '(', ')'], '', $phone)) ?>"><?= h($phone) ?></a></li>
                    <li><strong>LinkedIn:</strong><br><a href="<?= h($linkedin) ?>" target="_blank" rel="noopener noreferrer">@<?= h($linkedinUsername) ?></a></li>
                    <li><strong>GitHub:</strong><br><a href="<?= h($github) ?>" target="_blank" rel="noopener noreferrer">@<?= h($githubUsername) ?></a></li>
                    <?php if ($instagram !== '#'): ?>
                        <li><strong><?= h(t($texts, $pageLang, 'instagram_label')) ?>:</strong><br><a href="<?= h($instagram) ?>" target="_blank" rel="noopener noreferrer"><?= h($instagram) ?></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
&copy; <?= date('Y') ?> <?= h($name) ?>.
    </div>
</footer>

<script>
    document.body.classList.add('nav-ready');

    const navToggle = document.querySelector('.nav-toggle');
    const navPanel = document.querySelector('#nav-panel');
    const mobileMedia = window.matchMedia('(max-width: 780px)');

    if (navToggle && navPanel) {
        const closeNav = () => {
            navPanel.classList.remove('open');
            navToggle.setAttribute('aria-expanded', 'false');
        };

        navToggle.addEventListener('click', () => {
            const isOpen = navPanel.classList.toggle('open');
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        navPanel.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                if (mobileMedia.matches) {
                    closeNav();
                }
            });
        });

        mobileMedia.addEventListener('change', (event) => {
            if (!event.matches) {
                closeNav();
            }
        });
    }

    const reveals = document.querySelectorAll('.reveal');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, { threshold: 0.14 });

    reveals.forEach((item) => observer.observe(item));
</script>

</body>
</html>
