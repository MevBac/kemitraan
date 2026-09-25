<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KampusMagang — Portal Slot Magang Kemitraan Kampus & Industri</title>
    <meta name="description" content="Profil program kemitraan kampus dan industri untuk pembelajaran berbasis pengalaman, slot magang terverifikasi, serta pengembangan karier mahasiswa.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @fonts
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>@import 'tailwindcss';</style>
    @endif
    <style>
        :root {
            --primary: #19a4b9;
            --primary-hover: #0e8fa4;
            --primary-dark: #0e506a;
            --brand: #19a4b9;
            --brand-soft: #e0f2f6;
            --brand-foreground: #ffffff;
            --bg: #ffffff;
            --bg-secondary: #f5fafb;
            --bg-card: #ffffff;
            --text: #0e506a;
            --text-muted: #5a7580;
            --text-subtle: #7a8a92;
            --border: #d4dfe4;
            --border-subtle: #e8eff2;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: var(--text);
            background: var(--bg);
            line-height: 1.6;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        @media (min-width: 768px) {
            .container { padding: 0 32px; }
        }

        h1, h2, h3, h4 { font-weight: 700; }

        .section-index {
            font-size: 9px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--text-subtle);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .status-dot {
            display: inline-block;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: var(--primary);
        }

        .heading-hero {
            font-size: clamp(3rem, 5.4vw, 5.5rem);
            line-height: 0.98;
            letter-spacing: -0.02em;
            font-weight: 700;
        }

        .heading-lg {
            font-size: clamp(2rem, 5vw, 3.5rem);
            line-height: 1.2;
            letter-spacing: -0.01em;
            font-weight: 700;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 14px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            text-transform: uppercase;
        }

        .btn-primary:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 14px 20px;
            background: transparent;
            color: var(--text);
            border: 1px solid var(--border);
            border-radius: 6px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            text-transform: uppercase;
        }

        .btn-secondary:hover {
            background: var(--bg-secondary);
        }

        .btn-text {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: none;
            border: none;
            color: var(--primary);
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
        }

        .btn-text:hover {
            gap: 12px;
        }

        .card {
            border: 1px solid var(--border);
            border-radius: 0;
            background: var(--bg-card);
            transition: all 0.3s;
        }

        .card:hover {
            background: var(--bg-secondary);
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .section {
            padding: 80px 0;
        }

        @media (max-width: 768px) {
            .section { padding: 60px 0; }
        }

        header.sticky {
            position: sticky;
            top: 0;
            z-index: 50;
            border-bottom: 1px solid var(--border);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .nav-link {
            font-size: 12px;
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.3s;
            letter-spacing: 0.05em;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .image-scrim {
            background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);
        }

        .overlay {
            background: rgba(6, 22, 28, 0.7);
        }

        .grid-2 {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
        }

        @media (min-width: 1024px) {
            .grid-2 { grid-template-columns: 1fr 1fr; gap: 48px; }
        }

        .grid-3 {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        @media (min-width: 768px) {
            .grid-3 { grid-template-columns: repeat(2, 1fr); }
        }

        @media (min-width: 1024px) {
            .grid-3 { grid-template-columns: repeat(3, 1fr); }
        }

        .input-field {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-size: 14px;
            font-family: inherit;
            transition: all 0.3s;
        }

        .input-field:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(15, 156, 147, 0.1);
        }

        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(6, 22, 28, 0.7);
            backdrop-filter: blur(5px);
            z-index: 60;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 0;
            max-width: 650px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            border: 1px solid var(--border);
        }

        .marquee {
            overflow: hidden;
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }

        .marquee-track {
            display: flex;
            width: max-content;
            animation: scroll 40s linear infinite;
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .marquee-item {
            flex-shrink: 0;
            width: 256px;
            height: 112px;
            border-right: 1px solid var(--border);
            padding: 24px;
            display: flex;
            align-items: center;
            gap: 16px;
            opacity: 0.55;
            filter: grayscale(100%);
            transition: all 0.3s;
        }

        .marquee-item:hover {
            opacity: 1;
            filter: grayscale(0);
        }

        .initials-badge {
            width: 40px;
            height: 40px;
            border: 1px solid var(--border);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
            background: var(--bg-card);
        }

        .gradient-primary {
            background: linear-gradient(135deg, var(--primary) 0%, rgba(15, 156, 147, 0.8) 100%);
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="sticky">
        <div class="container">
            <div style="display: flex; align-items: center; justify-content: space-between; padding: 16px 0; height: 72px;">
                <a href="#beranda" style="display: flex; align-items: center; gap: 12px; text-decoration: none; color: var(--text);">
                    <span style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; border-radius: 6px; background: var(--primary); color: white;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </span>
                    <span>
                        <div style="font-size: 14px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase;">KAMPUSMAGANG</div>
                        <div style="font-size: 9px; font-weight: 600; color: var(--text-muted); text-transform: uppercase;">Pusat Karier & Kemitraan</div>
                    </span>
                </a>

                <nav style="display: flex; gap: 32px; align-items: center;" class="hidden lg:flex">
                    <a href="#profil-kampus" class="nav-link"><span style="font-size: 9px; color: var(--text-subtle);">01</span> Profil Kampus</a>
                    <a href="#rekomendasi-ai" class="nav-link"><span style="font-size: 9px; color: var(--text-subtle);">02</span> Rekomendasi AI</a>
                    <a href="#slot-magang" class="nav-link"><span style="font-size: 9px; color: var(--text-subtle);">03</span> Slot Magang</a>
                    <a href="#mitra" class="nav-link"><span style="font-size: 9px; color: var(--text-subtle);">04</span> Mitra</a>
                </nav>

                <a href="#daftar-mitra" class="btn-primary hidden lg:flex" style="display: flex; align-items: center; gap: 8px;">
                    Jadi Mitra
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 17L17 7M17 7H7M17 7V17"/>
                    </svg>
                </a>

                <button onclick="toggleMenu()" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border: 1px solid var(--border); border-radius: 6px; background: none; cursor: pointer; color: var(--text-muted);" class="lg:hidden" id="menuBtn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="6" x2="21" y2="6"/>
                        <line x1="3" y1="12" x2="21" y2="12"/>
                        <line x1="3" y1="18" x2="21" y2="18"/>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobileMenu" style="display: none; background: white; border-top: 1px solid var(--border); max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;" class="lg:hidden">
            <div class="container" style="padding: 0;">
                <nav style="display: flex; flex-direction: column; gap: 0;">
                    <a href="#profil-kampus" onclick="toggleMenu()" style="padding: 16px 20px; border-bottom: 1px solid var(--border-soft); text-decoration: none; color: var(--text); font-weight: 600; font-size: 14px; display: flex; align-items: center; gap: 12px; transition: background 0.2s;">
                        <span style="font-size: 12px; color: var(--primary); font-weight: 700;">01</span>
                        <span>Profil Kampus</span>
                    </a>
                    <a href="#rekomendasi-ai" onclick="toggleMenu()" style="padding: 16px 20px; border-bottom: 1px solid var(--border-soft); text-decoration: none; color: var(--text); font-weight: 600; font-size: 14px; display: flex; align-items: center; gap: 12px; transition: background 0.2s;">
                        <span style="font-size: 12px; color: var(--primary); font-weight: 700;">02</span>
                        <span>Rekomendasi AI</span>
                    </a>
                    <a href="#slot-magang" onclick="toggleMenu()" style="padding: 16px 20px; border-bottom: 1px solid var(--border-soft); text-decoration: none; color: var(--text); font-weight: 600; font-size: 14px; display: flex; align-items: center; gap: 12px; transition: background 0.2s;">
                        <span style="font-size: 12px; color: var(--primary); font-weight: 700;">03</span>
                        <span>Slot Magang</span>
                    </a>
                    <a href="#mitra" onclick="toggleMenu()" style="padding: 16px 20px; border-bottom: 1px solid var(--border-soft); text-decoration: none; color: var(--text); font-weight: 600; font-size: 14px; display: flex; align-items: center; gap: 12px; transition: background 0.2s;">
                        <span style="font-size: 12px; color: var(--primary); font-weight: 700;">04</span>
                        <span>Mitra</span>
                    </a>
                    <div style="padding: 16px 20px;">
                        <a href="#daftar-mitra" onclick="toggleMenu()" class="btn-primary" style="width: 100%; text-align: center; display: flex; align-items: center; justify-content: center; gap: 8px;">
                            JADI MITRA ↗
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" style="border-bottom: 1px solid var(--border); background: rgba(248, 249, 250, 0.45); padding: 32px 20px;" class="section">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr; gap: 0; border: 1px solid var(--border); border-radius: 0; overflow: hidden; background: white; box-shadow: 0 4px 20px rgba(0,0,0,0.08); min-height: 700px;" class="lg:grid-cols-[0.78fr_1.22fr]">
                <div style="display: flex; flex-direction: column; justify-content: space-between; padding: 40px; gap: 40px;">
                    <div>
                        <div class="section-index"><span class="status-dot"></span> PROGRAM KEMITRAAN KAMPUS–INDUSTRI</div>
                        <h1 class="heading-hero" style="margin-top: 40px;">Belajar di kampus. <span style="color: var(--primary);">Bertumbuh di industri.</span></h1>
                        <p style="margin-top: 28px; max-width: 500px; color: var(--text-muted); line-height: 1.7; font-size: 16px;">KampusMagang menghubungkan pembelajaran akademik dengan pengalaman kerja nyata melalui program magang yang terarah, terverifikasi, dan didampingi kampus.</p>
                        <div style="margin-top: 36px; display: flex; flex-direction: column; gap: 12px;" class="sm:flex-row">
                            <a href="#slot-magang" class="btn-primary" style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                                Temukan slot magang
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 17L17 7M17 7H7M17 7V17"/>
                                </svg>
                            </a>
                            <a href="#profil-kampus" class="btn-secondary">Kenali program kami</a>
                        </div>
                    </div>
                    <dl style="margin-top: 48px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; border-top: 1px solid var(--border); padding-top: 28px;">
                        <div>
                            <dt style="font-size: 28px; font-weight: 700; color: var(--primary);">120+</dt>
                            <dd style="margin-top: 8px; font-size: 11px; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">Perusahaan mitra</dd>
                        </div>
                        <div>
                            <dt style="font-size: 28px; font-weight: 700; color: var(--primary);">850</dt>
                            <dd style="margin-top: 8px; font-size: 11px; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">Slot / tahun</dd>
                        </div>
                        <div>
                            <dt style="font-size: 28px; font-weight: 700; color: var(--primary);">92%</dt>
                            <dd style="margin-top: 8px; font-size: 11px; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">Terserap kerja</dd>
                        </div>
                    </dl>
                </div>

                <div style="position: relative; min-height: 480px; overflow: hidden; background: var(--bg-secondary);" class="lg:min-h-full">
                    <img src="/assets/campus-program-launch.jpg" alt="Pelepasan peserta magang bersama mitra industri" style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                    <div class="image-scrim" style="position: absolute; inset: 0;"></div>
                    <div style="position: absolute; inset-x: 0; bottom: 0; padding: 24px; color: white;">
                        <p style="font-size: 10px; font-weight: 600; text-transform: uppercase; opacity: 0.8;">Dokumentasi kegiatan / Program Kampus–Industri</p>
                        <h2 style="margin-top: 12px; font-size: 24px; font-weight: 700; line-height: 1.3;">Pelepasan peserta magang bersama mitra industri</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil Kampus -->
    <section id="profil-kampus" style="border-bottom: 1px solid var(--border); background: white;" class="section">
        <div class="container">
            <div class="grid-2">
                <div>
                    <div class="section-index">01 // PROFIL & ARAH KEMITRAAN</div>
                    <h2 class="heading-lg" style="margin-top: 20px;">Menyiapkan lulusan yang siap berkarya, bukan sekadar siap melamar.</h2>
                </div>
                <div class="grid-3" style="gap: 28px;">
                    <p style="color: var(--text-muted); line-height: 1.8;">KampusMagang merupakan pusat kolaborasi kampus dan dunia industri untuk membuka akses pengalaman kerja yang relevan bagi mahasiswa. Setiap peluang dihimpun dalam satu sistem agar proses pencarian, seleksi, dan pendampingan lebih jelas.</p>
                    <p style="color: var(--text-muted); line-height: 1.8;">Program ini dirancang untuk mempertemukan kompetensi akademik dengan kebutuhan nyata perusahaan. Mitra memperoleh talenta potensial, sementara mahasiswa membangun portofolio, jejaring profesional, dan pemahaman budaya kerja.</p>
                </div>
            </div>

            <div style="margin-top: 56px; display: grid; gap: 20px;" class="lg:grid-cols-12">
                <div style="position: relative; min-height: 420px; overflow: hidden; border-radius: 0;" class="lg:col-span-7">
                    <img src="/assets/campus-industry-workshop.jpg" alt="Mahasiswa mengembangkan proyek bersama di laboratorium inovasi" style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                    <div class="image-scrim" style="position: absolute; inset: 0;"></div>
                    <p style="position: absolute; bottom: 24px; left: 24px; max-width: 360px; font-size: 20px; font-weight: 600; color: white;">Pembelajaran kolaboratif yang membawa teori ke persoalan nyata.</p>
                </div>
                <div style="display: grid; gap: 20px;" class="lg:col-span-5">
                    <div style="border-radius: 0; border: 1px solid var(--border); background: var(--bg-secondary); padding: 28px;">
                        <span style="font-size: 14px; font-weight: 700; color: var(--primary); text-transform: uppercase;">Visi program</span>
                        <p style="margin-top: 16px; font-size: 20px; font-weight: 600; line-height: 1.4;">Menjadi penghubung terpercaya antara talenta kampus dan pertumbuhan industri Indonesia.</p>
                    </div>
                    <div style="position: relative; min-height: 250px; overflow: hidden; border-radius: 0;">
                        <img src="/assets/campus-company-visit.jpg" alt="Mahasiswa mengikuti kunjungan dan pengarahan dari mitra industri" style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                    </div>
                </div>
            </div>

            <div style="margin-top: 64px; display: grid; gap: 0; overflow: hidden; border: 1px solid var(--border); border-radius: 0;" class="md:grid-cols-3">
                <article style="background: white; padding: 28px; border-right: 1px solid var(--border);">
                    <img src="{{ asset('assets/icons/open-book.png') }}" alt="Relevansi pembelajaran" width="24" height="24" style="display: block; filter: brightness(0) saturate(100%) invert(32%) sepia(47%) saturate(1200%) hue-rotate(150deg) brightness(90%) contrast(85%);">
                    <h3 style="margin-top: 28px; font-size: 20px; font-weight: 700;">Relevansi pembelajaran</h3>
                    <p style="margin-top: 12px; font-size: 14px; color: var(--text-muted); line-height: 1.6;">Pengalaman di industri dipadukan dengan capaian pembelajaran program studi.</p>
                </article>
                <article style="background: white; padding: 28px; border-right: 1px solid var(--border);">
                    <img src="{{ asset('assets/icons/handshake.png') }}" alt="Kemitraan berkelanjutan" width="24" height="24" style="display: block; filter: brightness(0) saturate(100%) invert(32%) sepia(47%) saturate(1200%) hue-rotate(150deg) brightness(90%) contrast(85%);">
                    <h3 style="margin-top: 28px; font-size: 20px; font-weight: 700;">Kemitraan berkelanjutan</h3>
                    <p style="margin-top: 12px; font-size: 14px; color: var(--text-muted); line-height: 1.6;">Kampus dan perusahaan menyusun kebutuhan talenta, proyek, serta evaluasi bersama.</p>
                </article>
                <article style="background: white; padding: 28px;">
                    <img src="{{ asset('assets/icons/shield.png') }}" alt="Pendampingan terukur" width="24" height="24" style="display: block; filter: brightness(0) saturate(100%) invert(32%) sepia(47%) saturate(1200%) hue-rotate(150deg) brightness(90%) contrast(85%);">
                    <h3 style="margin-top: 28px; font-size: 20px; font-weight: 700;">Pendampingan terukur</h3>
                    <p style="margin-top: 12px; font-size: 14px; color: var(--text-muted); line-height: 1.6;">Mahasiswa didampingi sejak persiapan, pelaksanaan, hingga konversi hasil belajar.</p>
                </article>
            </div>

            <div class="grid-2" style="margin-top: 80px; gap: 80px;">
                <div>
                    <div class="section-index">ALUR PROGRAM</div>
                    <h3 class="heading-lg" style="margin-top: 20px;">Dari peluang hingga pengalaman yang diakui.</h3>
                    <a href="#slot-magang" class="btn-text" style="margin-top: 28px; display: flex; align-items: center; gap: 8px;">
                        Lihat peluang tersedia
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </a>
                </div>
                <div style="display: grid; gap: 0; overflow: hidden; border: 1px solid var(--border); border-radius: 0;" class="sm:grid-cols-2">
                    <article style="background: white; padding: 28px; border-bottom: 1px solid var(--border); border-right: 1px solid var(--border);">
                        <span style="font-size: 12px; font-weight: 700; color: var(--primary); text-transform: uppercase;">01</span>
                        <h4 style="margin-top: 32px; font-size: 18px; font-weight: 700; display: flex; align-items: center; gap: 8px;">
                            <img src="{{ asset('assets/icons/workflow.png') }}" alt="Kurasi peluang" width="18" height="18" style="filter: brightness(0) saturate(100%) invert(32%) sepia(47%) saturate(1200%) hue-rotate(150deg) brightness(90%) contrast(85%);">
                            Kurasi peluang
                        </h4>
                        <p style="margin-top: 12px; font-size: 14px; color: var(--text-muted); line-height: 1.6;">Tim kampus memeriksa mitra, deskripsi peran, durasi, dan kesesuaian bidang studi.</p>
                    </article>
                    <article style="background: white; padding: 28px; border-bottom: 1px solid var(--border);">
                        <span style="font-size: 12px; font-weight: 700; color: var(--primary); text-transform: uppercase;">02</span>
                        <h4 style="margin-top: 32px; font-size: 18px; font-weight: 700; display: flex; align-items: center; gap: 8px;">
                            <img src="{{ asset('assets/icons/check.png') }}" alt="Persiapan mahasiswa" width="18" height="18" style="filter: brightness(0) saturate(100%) invert(32%) sepia(47%) saturate(1200%) hue-rotate(150deg) brightness(90%) contrast(85%);">
                            Persiapan mahasiswa
                        </h4>
                        <p style="margin-top: 12px; font-size: 14px; color: var(--text-muted); line-height: 1.6;">Peserta mendapat pembekalan CV, komunikasi profesional, dan kesiapan kerja.</p>
                    </article>
                    <article style="background: white; padding: 28px; border-right: 1px solid var(--border);">
                        <span style="font-size: 12px; font-weight: 700; color: var(--primary); text-transform: uppercase;">03</span>
                        <h4 style="margin-top: 32px; font-size: 18px; font-weight: 700; display: flex; align-items: center; gap: 8px;">
                            <img src="{{ asset('assets/icons/audience.png') }}" alt="Magang & pendampingan" width="18" height="18" style="filter: brightness(0) saturate(100%) invert(32%) sepia(47%) saturate(1200%) hue-rotate(150deg) brightness(90%) contrast(85%);">
                            Magang & pendampingan
                        </h4>
                        <p style="margin-top: 12px; font-size: 14px; color: var(--text-muted); line-height: 1.6;">Dosen pembimbing dan mentor industri memantau progres serta pengalaman belajar.</p>
                    </article>
                    <article style="background: white; padding: 28px;">
                        <span style="font-size: 12px; font-weight: 700; color: var(--primary); text-transform: uppercase;">04</span>
                        <h4 style="margin-top: 32px; font-size: 18px; font-weight: 700; display: flex; align-items: center; gap: 8px;">
                            <img src="{{ asset('assets/icons/increase.png') }}" alt="Evaluasi & rekognisi" width="18" height="18" style="filter: brightness(0) saturate(100%) invert(32%) sepia(47%) saturate(1200%) hue-rotate(150deg) brightness(90%) contrast(85%);">
                            Evaluasi & rekognisi
                        </h4>
                        <p style="margin-top: 12px; font-size: 14px; color: var(--text-muted); line-height: 1.6;">Capaian mahasiswa dinilai dan dapat direkognisi sesuai ketentuan akademik kampus.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Rekomendasi AI -->
    <section id="rekomendasi-ai" style="border-bottom: 1px solid var(--border); background: rgba(248, 249, 250, 0.55);" class="section">
        <div class="container">
            <div class="grid-2" style="gap: 80px;">
                <div>
                    <div class="section-index">02 // REKOMENDASI AI</div>
                    <h2 class="heading-lg" style="margin-top: 20px;">Temukan peluang yang paling cocok untukmu.</h2>
                    <p style="margin-top: 24px; max-width: 500px; color: var(--text-muted); line-height: 1.7;">Ceritakan arah karier dan kemampuanmu. AI akan membandingkannya dengan slot aktif, lalu menjelaskan alasan kecocokannya.</p>
                    <div style="margin-top: 32px; display: flex; gap: 12px; border-left: 2px solid var(--primary); background: white; padding: 16px; border-radius: 0; font-size: 14px; color: var(--text-muted); line-height: 1.6;">
                        <img src="{{ asset('assets/icons/increase.png') }}" alt="Sparkles" width="16" height="16" style="filter: brightness(0) saturate(100%) invert(32%) sepia(47%) saturate(1200%) hue-rotate(150deg) brightness(90%) contrast(85%); margin-top: 2px;">
                        Isian digunakan hanya untuk membuat rekomendasi saat ini dan tidak disimpan.
                    </div>
                </div>

                <div class="card" style="padding: 20px 32px;">
                    <form style="display: grid; gap: 20px;" class="sm:grid-cols-2">
                        <div class="sm:col-span-2">
                            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Minat bidang atau posisi</label>
                            <textarea placeholder="Contoh: pengembangan web, analisis data, desain produk" class="input-field" style="min-height: 96px; resize: vertical;"></textarea>
                        </div>
                        <div class="sm:col-span-2">
                            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Keahlian dan pengalaman</label>
                            <textarea placeholder="Contoh: React dasar, Figma, Excel, organisasi kampus" class="input-field" style="min-height: 96px; resize: vertical;"></textarea>
                        </div>
                        <div>
                            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Tipe kerja</label>
                            <select class="input-field">
                                <option>Bebas</option>
                                <option>WFH</option>
                                <option>WFO</option>
                                <option>Hybrid</option>
                            </select>
                        </div>
                        <div>
                            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px;">Preferensi lokasi</label>
                            <input type="text" placeholder="Contoh: Jakarta atau Remote" class="input-field">
                        </div>
                        <button type="submit" class="btn-primary sm:col-span-2" style="height: 48px; display: flex; align-items: center; justify-content: center; gap: 8px;">
                        Buat rekomendasi
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="bi bi-arrow-up-right">
                            <path d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Slot Magang -->
    <section id="slot-magang" style="border-bottom: 1px solid var(--border); background: white;" class="section">
        <div class="container">
            <div style="display: flex; flex-direction: column; justify-content: space-between; gap: 32px;" class="md:flex-row md:items-end">
                <div>
                    <div class="section-index">03 // SLOT MAGANG TERSEDIA</div>
                    <h2 class="heading-lg" style="margin-top: 20px;">Temukan pengalaman yang selaras dengan bidangmu.</h2>
                </div>
                <div style="display: flex; align-items: center; gap: 12px; font-size: 10px; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em;">
                    <span class="status-dot"></span> 06 posisi aktif
                </div>
            </div>

            <div style="margin-top: 56px; display: grid; border: 1px solid var(--border); border-radius: 0; overflow: hidden;" class="md:grid-cols-[1.6fr_1fr_1fr]">
                <label style="position: relative; background: white; display: flex; align-items: center;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--text-subtle)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); pointer-events: none;">
                        <circle cx="11" cy="11" r="8"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    </svg>
                    <input type="text" placeholder="Cari posisi atau perusahaan" class="input-field" style="border: none; padding-left: 48px; border-bottom: 1px solid var(--border);" class="md:border-b-0 md:border-r">
                </label>
                <select class="input-field" style="border: none; border-bottom: 1px solid var(--border); border-radius: 0;">
                    <option>Semua Bidang</option>
                    <option>Teknologi Informasi</option>
                    <option>Desain & Kreatif</option>
                    <option>Bisnis & Marketing</option>
                    <option>Keuangan</option>
                    <option>Teknik</option>
                </select>
                <select class="input-field" style="border: none; border-radius: 0;">
                    <option>Semua Tipe</option>
                    <option>WFO</option>
                    <option>WFH</option>
                    <option>Hybrid</option>
                </select>
            </div>

            <div style="margin-top: 32px; display: grid; gap: 0; border: 1px solid var(--border); border-radius: 0; overflow: hidden;" class="md:grid-cols-2 lg:grid-cols-3">
                @php
                $slots = [
                    ['id' => 1, 'posisi' => 'Frontend Developer Intern', 'perusahaan' => 'PT Nusantara Digital', 'bidang' => 'Teknologi Informasi', 'tipe' => 'Hybrid', 'kuota' => 5, 'durasi' => '6 bulan', 'lokasi' => 'Jakarta Selatan'],
                    ['id' => 2, 'posisi' => 'Data Analyst Intern', 'perusahaan' => 'Bank Sentosa Mandiri', 'bidang' => 'Keuangan', 'tipe' => 'WFO', 'kuota' => 3, 'durasi' => '4 bulan', 'lokasi' => 'Surabaya'],
                    ['id' => 3, 'posisi' => 'UI/UX Designer Intern', 'perusahaan' => 'Kreasi Studio', 'bidang' => 'Desain & Kreatif', 'tipe' => 'WFH', 'kuota' => 4, 'durasi' => '3 bulan', 'lokasi' => 'Remote'],
                    ['id' => 4, 'posisi' => 'Digital Marketing Intern', 'perusahaan' => 'PT Cipta Karya Retail', 'bidang' => 'Bisnis & Marketing', 'tipe' => 'Hybrid', 'kuota' => 6, 'durasi' => '5 bulan', 'lokasi' => 'Bandung'],
                    ['id' => 5, 'posisi' => 'Quality Engineering Intern', 'perusahaan' => 'PT Baja Perkasa Industri', 'bidang' => 'Teknik', 'tipe' => 'WFO', 'kuota' => 2, 'durasi' => '6 bulan', 'lokasi' => 'Cikarang'],
                    ['id' => 6, 'posisi' => 'Backend Developer Intern', 'perusahaan' => 'Sinergi Cloud Indonesia', 'bidang' => 'Teknologi Informasi', 'tipe' => 'WFH', 'kuota' => 4, 'durasi' => '6 bulan', 'lokasi' => 'Remote'],
                ];
                @endphp

                @foreach($slots as $index => $slot)
                <article class="card" style="display: flex; flex-direction: column; min-height: 390px; padding: 24px; border-right: 1px solid var(--border); border-bottom: 1px solid var(--border);">
                    <div style="display: flex; align-items: center; justify-content: space-between; font-size: 9px; font-weight: 700; color: var(--text-subtle); text-transform: uppercase; letter-spacing: 0.05em;">
                        <span>Opportunity / {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span style="background: var(--brand-soft); color: var(--primary); padding: 4px 8px; border-radius: 4px;">{{ $slot['tipe'] }}</span>
                    </div>
                    <div style="margin-top: 32px;">
                        <span style="display: inline-block; border: 1px solid var(--border); padding: 4px 8px; border-radius: 4px; font-size: 9px; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">{{ $slot['bidang'] }}</span>
                        <h3 style="margin-top: 20px; font-size: 20px; font-weight: 700; line-height: 1.3;">{{ $slot['posisi'] }}</h3>
                        <p style="margin-top: 8px; font-size: 14px; color: var(--text-muted);">{{ $slot['perusahaan'] }}</p>
                    </div>
                    <dl style="margin-top: 32px; display: grid; grid-template-columns: 1fr 1fr; gap: 16px; border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); padding-top: 20px; padding-bottom: 20px; font-size: 10px; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">
                        <div>
                            <dt>Kuota</dt>
                            <dd style="margin-top: 4px; color: var(--text); font-size: 14px;">{{ $slot['kuota'] }} mahasiswa</dd>
                        </div>
                        <div>
                            <dt>Durasi</dt>
                            <dd style="margin-top: 4px; color: var(--text); font-size: 14px;">{{ $slot['durasi'] }}</dd>
                        </div>
                        <div class="col-span-2">
                            <dt>Lokasi</dt>
                            <dd style="margin-top: 4px; color: var(--text); font-size: 14px;">{{ $slot['lokasi'] }}</dd>
                        </div>
                    </dl>
                    <button onclick="openModal({{ $slot['id'] }})" type="button" style="margin-top: auto; border-top: 1px solid var(--border); padding-top: 20px; font-size: 14px; font-weight: 700; background: none; border: none; cursor: pointer; display: flex; align-items: center; justify-content: space-between; width: 100%;">
                        Detail & Daftar
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--text-muted)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </button>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Mitra -->
    <section id="mitra" style="border-bottom: 1px solid var(--border); background: rgba(248, 249, 250, 0.7);" class="section">
        <div class="container">
            <div style="display: flex; flex-direction: column; justify-content: space-between; gap: 24px;" class="md:flex-row md:items-end">
                <div>
                    <div class="section-index">04 // MITRA INDUSTRI</div>
                    <h2 class="heading-lg" style="margin-top: 20px;">Jejaring mitra yang membuka ruang belajar nyata.</h2>
                </div>
                <p style="max-width: 320px; font-size: 14px; color: var(--text-muted); line-height: 1.6;">Jaringan perusahaan yang telah menandatangani kerja sama resmi untuk pengembangan talenta mahasiswa.</p>
            </div>
        </div>
        <div class="marquee" style="margin-top: 56px;">
            <div class="marquee-track">
                @php $mitra = ['Nusantara Digital', 'Bank Sentosa Mandiri', 'Kreasi Studio', 'Cipta Karya Retail', 'Baja Perkasa', 'Sinergi Cloud', 'Adiwangsa Logistik', 'Mitra Sehat Farma', 'Garuda Telekom', 'Samudra Energi']; @endphp
                @foreach(array_merge($mitra, $mitra) as $partner)
                <div class="marquee-item">
                    <span class="initials-badge">{{ substr(str_replace(' ', '', $partner), 0, 2) }}</span>
                    <span style="font-size: 14px; font-weight: 600; line-height: 1.3;">{{ $partner }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section id="testimoni" style="border-bottom: 1px solid var(--border); background: white;" class="section">
        <div class="container">
            <div class="section-index">05 // TESTIMONI ALUMNI</div>
            <div style="margin-top: 20px; display: flex; flex-direction: column; justify-content: space-between; gap: 24px;" class="md:flex-row md:items-end">
                <h2 class="heading-lg">Pengalaman magang yang menjadi awal perjalanan karier.</h2>
                <p style="max-width: 320px; font-size: 14px; color: var(--text-muted); line-height: 1.6;">Cerita nyata dari alumni yang memulai perjalanan profesional melalui jaringan mitra kampus.</p>
            </div>

            <div style="margin-top: 56px; display: grid; border-left: 1px solid var(--border); border-top: 1px solid var(--border);" class="md:grid-cols-3">
                @php
                $testimonials = [
                    ['nama' => 'Rani Puspitasari', 'prodi' => 'Sistem Informasi 2021', 'perusahaan' => 'PT Nusantara Digital', 'kutipan' => 'Dulu saya bingung cari magang ke mana. Lewat portal kampus ini saya hanya perlu satu kali daftar, dan dua minggu kemudian sudah wawancara.'],
                    ['nama' => 'Bagas Ardiansyah', 'prodi' => 'Teknik Industri 2020', 'perusahaan' => 'PT Baja Perkasa Industri', 'kutipan' => 'Slot magangnya jelas: kuota, durasi, sampai lokasi. Setelah magang saya langsung ditawari kontrak kerja penuh waktu.'],
                    ['nama' => 'Nadia Kusuma', 'prodi' => 'Desain Komunikasi Visual 2021', 'perusahaan' => 'Kreasi Studio', 'kutipan' => 'Portofolio saya berkembang pesat selama tiga bulan magang. Prosesnya transparan dan dibimbing langsung oleh dosen pembimbing kampus.'],
                ];
                @endphp

                @foreach($testimonials as $index => $testimonial)
                <figure class="card" style="display: flex; flex-direction: column; min-height: 330px; padding: 28px; border-bottom: 1px solid var(--border); border-right: 1px solid var(--border);">
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <span style="font-size: 10px; font-weight: 700; color: var(--text-subtle); text-transform: uppercase;">CASE / 0{{ $index + 1 }}</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--text-subtle)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <blockquote style="margin-top: 40px; flex: 1; font-size: 18px; font-weight: 500; line-height: 1.75;">"{{ $testimonial['kutipan'] }}"</blockquote>
                    <figcaption style="margin-top: 32px; display: flex; align-items: end; justify-content: space-between; border-top: 1px solid var(--border); padding-top: 20px;">
                        <span>
                            <span style="display: block; font-size: 14px; font-weight: 700;">{{ $testimonial['nama'] }}</span>
                            <span style="display: block; margin-top: 4px; font-size: 10px; color: var(--text-muted); text-transform: uppercase;">{{ $testimonial['prodi'] }}</span>
                            <span style="display: block; margin-top: 4px; font-size: 13px; color: var(--text-muted);">{{ $testimonial['perusahaan'] }}</span>
                        </span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--text-subtle)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </figcaption>
                </figure>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section style="border-bottom: 1px solid var(--border); background: rgba(248, 249, 250, 0.45); text-align: center; padding: 80px 20px;" class="md:py-28">
        <div class="container">
            <h2 class="heading-lg" style="margin-bottom: 24px;">Bangun talenta masa depan bersama kami.</h2>
            <p style="color: var(--text-muted); margin-bottom: 32px; line-height: 1.7; max-width: 600px; margin-left: auto; margin-right: auto;">Buka akses magang untuk mahasiswa kami. Tim kerja sama kampus akan menghubungi Anda untuk proses berikutnya.</p>
            <a href="#daftar-mitra" class="btn-primary" style="display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                Ajukan Kerjasama
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="daftar-mitra" style="background: white;">
        <div class="container" style="border-left: 1px solid var(--border); border-right: 1px solid var(--border); padding: 80px 0 80px 32px;" class="md:py-28 md:pl-8">
            <div class="section-index">06 // KERJASAMA</div>
            <div class="grid-2" style="margin-top: 24px; gap: 56px;">
                <div class="gradient-primary" style="display: flex; flex-direction: column; justify-content: space-between; border-radius: 0; padding: 28px;">
                    <div>
                        <h2 class="heading-lg" style="color: white;">Bangun talenta masa depan bersama kami.</h2>
                        <p style="margin-top: 24px; max-width: 500px; font-size: 14px; line-height: 1.6; opacity: 0.75;">Buka akses magang untuk mahasiswa kami. Tim kerja sama kampus akan menghubungi Anda untuk proses berikutnya.</p>
                    </div>
                    <div style="margin-top: 48px; space: 20px; border-top: 1px solid rgba(255, 255, 255, 0.2); padding-top: 28px; font-size: 14px; opacity: 0.8;">
                        <p style="display: flex; align-items: start; gap: 12px; margin-bottom: 16px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 2px;">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            Jl. Pendidikan No. 12, Gedung Rektorat Lt. 3
                        </p>
                        <p style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0;">
                                <rect x="2" y="4" width="20" height="16" rx="2"/>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                            </svg>
                            kerjasama@kampus.ac.id
                        </p>
                        <p style="display: flex; align-items: center; gap: 12px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0;">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            (021) 5550 1234
                        </p>
                    </div>
                </div>

                <div class="card" style="padding: 20px 32px;">
                    <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border); padding-bottom: 20px;">
                        <h3 style="font-size: 18px; font-weight: 700;">Formulir Kemitraan</h3>
                    </div>
                    <form style="margin-top: 28px; display: grid; gap: 16px;" class="sm:grid-cols-2">
                        <label style="space: 8px;">
                            <span style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px;">Nama perusahaan</span>
                            <input type="text" placeholder="PT Nama Perusahaan" class="input-field">
                        </label>
                        <label style="space: 8px;">
                            <span style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px;">Penanggung jawab</span>
                            <input type="text" placeholder="Nama lengkap" class="input-field">
                        </label>
                        <label style="space: 8px;">
                            <span style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px;">Email perusahaan</span>
                            <input type="email" placeholder="nama@perusahaan.com" class="input-field">
                        </label>
                        <label style="space: 8px;">
                            <span style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px;">No. Telepon</span>
                            <input type="tel" placeholder="0896 1234 5678" class="input-field">
                        </label>
                        <label style="sm:col-span-2; space: 8px;">
                            <span style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px;">Rencana kerja sama</span>
                            <textarea placeholder="Ceritakan kebutuhan dan slot magang yang ditawarkan" class="input-field" style="min-height: 120px;"></textarea>
                        </label>
                        <button type="submit" class="btn-primary sm:col-span-2" style="height: 48px; margin-top: 8px;">
                        Ajukan Kerjasama
                    </button>
                    </form>
                </div>
            </div>

            <div style="margin-top: 80px; display: flex; flex-direction: column; gap: 24px; border-top: 1px solid var(--border); padding-top: 28px;" class="sm:flex-row sm:items-center sm:justify-between">
                <div style="display: flex; align-items: center; gap: 12px;">
                    <img src="{{ asset('assets/icons/open-book.png') }}" alt="KampusMagang" width="20" height="20" style="filter: brightness(0) saturate(100%) invert(32%) sepia(47%) saturate(1200%) hue-rotate(150deg) brightness(90%) contrast(85%);">
                    <span style="font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em;">KAMPUSMAGANG</span>
                </div>
                <p style="font-size: 9px; font-weight: 700; color: var(--text-subtle); text-transform: uppercase;">© 2026 Bagian Kerja Sama & Karier Kampus</p>
                <div style="display: flex; gap: 8px;">
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border: 1px solid var(--border); border-radius: 6px; color: var(--text-muted); text-decoration: none; transition: all 0.3s;">
                        <img src="{{ asset('assets/icons/instagram.png') }}" alt="Instagram" width="18" height="18" style="filter: brightness(0) invert(50%);">
                    </a>
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border: 1px solid var(--border); border-radius: 6px; color: var(--text-muted); text-decoration: none; transition: all 0.3s;">
                        <img src="{{ asset('assets/icons/linkedin.png') }}" alt="LinkedIn" width="18" height="18" style="filter: brightness(0) invert(50%);">
                    </a>
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border: 1px solid var(--border); border-radius: 6px; color: var(--text-muted); text-decoration: none; transition: all 0.3s;">
                        <img src="{{ asset('assets/icons/facebook.png') }}" alt="Facebook" width="18" height="18" style="filter: brightness(0) invert(50%);">
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            const isOpen = menu.style.maxHeight !== '0px' && menu.style.maxHeight !== '';
            
            if (isOpen) {
                menu.style.maxHeight = '0px';
                menu.style.display = 'none';
            } else {
                menu.style.display = 'block';
                requestAnimationFrame(() => {
                    const contentHeight = menu.querySelector('nav').scrollHeight;
                    menu.style.maxHeight = contentHeight + 'px';
                });
            }
        }

        function openModal(id) {
            alert('Modal untuk slot ' + id);
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                const menu = document.getElementById('mobileMenu');
                menu.style.maxHeight = '0px';
                menu.style.display = 'none';
            }
        });
    </script>
</body>
</html>
