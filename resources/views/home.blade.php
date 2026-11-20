<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMPA - Platform Pencari Partner Kompetisi Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <!-- Latar Belakang -->
    <div class="glow glow-hero-tr"></div>
    <div class="glow glow-hero-bl"></div>
    <div class="glow glow-mid-left"></div>
    <div class="glow glow-bot-left"></div>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="navbar-inner">
                   <a href="/" class="brand">
            <img src="{{ asset('images/logo.png') }}" alt="Logo TEMPA" style="height: 32px; width: auto;">
        </a>

            <nav class="nav-links">
                <a href="/" class="nav-link active">Beranda</a>
                <a href="/finding-partner" class="nav-link">Temukan Partner</a>
                <a href="/dashboard" class="nav-link">Dashboard Tim</a>
                <a href="/chat" class="nav-link">Chat</a>
            </nav>

            <div class="nav-actions">
                @auth
                    <span style="font-size: 13.5px; font-weight: 700; color: #3b2a8f;">
                        Halo, {{ explode(' ', Auth::user()->name)[0] }}
                    </span>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" style="background: none; border: 1.5px solid #d9d2f7; padding: 8px 16px; border-radius: 999px; font-size: 13px; font-weight: 700; color: #b91c1c; cursor: pointer;">
                            Keluar
                        </button>
                    </form>
                    <a href="/finding-partner/create" class="btn-primary-pill">+ Buat Finding Partner</a>
                @else
                    <a href="/login" class="btn-login-nav">Masuk</a>
                    <a href="/login" class="btn-primary-pill">+ Buat Finding Partner</a>
                @endauth
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                
                <!-- Kiri: Headline & Pencarian -->
                <div>
                    <div class="pill-tag">
                        <span class="pill-dot"></span>
                        Platform pencari partner kompetisi mahasiswa
                    </div>

                    <h1 class="hero-title">
                        Temukan Partner untuk Aksi.<br>
                        <span>Wujudkan Tim Kompetisi Impianmu.</span>
                    </h1>

                    <p class="hero-desc">
                        Bukan sekadar info lomba. TEMPA menghubungkan mahasiswa lintas disiplin, menganalisis kecocokan keahlian dengan Skill-Gap Analyzer, dan mempermudah pembentukan tim kompetisi dari tahap eksplorasi hingga siap tanding.
                    </p>

                    <div class="hero-cta-group">
                        <a href="/finding-partner" class="btn-hero-primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                            Cari Tim di Temukan Partner
                        </a>
                        <a href="/finding-partner/create" class="btn-hero-secondary">
                            + Buat Finding Partner
                        </a>
                    </div>

                    <form action="/finding-partner" method="GET" class="search-box">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#8c899e" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                        <input type="text" id="hero-search-input" name="q" placeholder="Cari kompetisi atau keahlian (misal: Gemastik, Flutter, Data Sci...)">
                        <button type="submit">Cari</button>
                    </form>

                    <div class="popular-tags">
                        <span>Populer:</span>
                        <a href="#" class="tag-chip">Hackathon & AI</a>
                        <a href="#" class="tag-chip">PKM-KC / Riset</a>
                        <a href="#" class="tag-chip">Business Plan</a>
                        <a href="#" class="tag-chip">UI/UX Design</a>
                    </div>
                </div>

                <!-- Kanan: Kartu Preview Tim -->
                <div class="preview-card">
                    <div class="preview-header">
                        <div class="badges-row">
                            <span class="mini-badge-purple">Gemastik</span>
                            <span class="mini-badge-cyan">Karya Tulis Ilmiah</span>
                        </div>
                        <div class="avatar-circle">E</div>
                    </div>

                    <h3 class="preview-title">Tim Ecovision – Solusi AI Pendeteksi Sampah Sungai</h3>

                    <div class="progress-meta">
                        <span>Kesiapan Formasi Tim</span>
                        <span>80%</span>
                    </div>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-fill"></div>
                    </div>
                    <div class="progress-sub">2/3 anggota terkumpul</div>

                    <div class="role-section-label">STATUS PEMENUHAN ROLE</div>

                    <div class="role-list">
                        <div class="role-item filled">
                            <div class="role-left">
                                <div class="role-icon-green">✓</div>
                                <div>
                                    <div class="role-name">UI/UX Designer</div>
                                    <div class="role-status-green">Terpenuhi</div>
                                </div>
                            </div>
                        </div>

                        <div class="role-item filled">
                            <div class="role-left">
                                <div class="role-icon-green">✓</div>
                                <div>
                                    <div class="role-name">Fullstack Dev</div>
                                    <div class="role-status-green">Terpenuhi</div>
                                </div>
                            </div>
                        </div>

                        <div class="role-item open">
                            <div class="role-left">
                                <div class="role-icon-orange">!</div>
                                <div>
                                    <div class="role-name">Machine Learning Engineer</div>
                                    <div class="role-status-orange">Masih dibutuhkan</div>
                                </div>
                            </div>
                            <a href="/finding-partner" class="btn-lamar-mini">Lamar</a>
                        </div>
                    </div>

                    <div class="preview-footer">
                        <span>Ditutup 4 hari lagi</span>
                        <a href="/dashboard">Lihat dashboard tim →</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- STATS SECTION -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-top">Universitas Brawijaya memiliki sekitar</div>
                    <div class="stat-number">80.000</div>
                    <div class="stat-sub">mahasiswa (Januari 2026)</div>
                </div>

                <div class="stat-card">
                    <div class="stat-number purple">#3</div>
                    <div class="stat-label-purple">NASIONAL</div>
                    <div class="stat-sub">peringkat UB di prestasi mahasiswa (Puspresnas)</div>
                </div>

                <div class="stat-card">
                    <div class="stat-number purple">23</div>
                    <div class="stat-label-purple">BIDANG LOMBA</div>
                    <div class="stat-sub">bidang lomba yang diikuti UB secara konsisten</div>
                </div>
            </div>
            <p class="stats-caption">
                Besarnya populasi dan tingginya minat berkompetisi membuka peluang kolaborasi lintas program studi dan bidang keahlian.
            </p>
        </div>
    </section>

    <!-- TENTANG TEMPA -->
    <section class="problems-section">
        <div class="container">
            <div class="section-badge-pink">TENTANG TEMPA</div>
            <h2 class="section-title-center">Permasalahan yang Ingin<br>Diselesaikan</h2>
            <p class="section-sub-center">
                Mencari partner kompetisi masih sering bergantung pada grup percakapan dan lingkaran pertemanan. TEMPA merapikannya dalam satu platform.
            </p>

            <div class="problems-grid">
                <div class="problem-card">
                    <span class="num-pill">01</span>
                    <h3>Informasi Tersebar</h3>
                    <p>Pencarian anggota dilakukan lewat grup percakapan, media sosial, atau jaringan pertemanan, sehingga sulit ditemukan kembali dan akhirnya hanya dengan orang yang sudah dikenal.</p>
                </div>

                <div class="problem-card">
                    <span class="num-pill">02</span>
                    <h3>Kecocokan Keterampilan Belum Terpetakan</h3>
                    <p>Calon anggota ditemukan, tetapi gambaran keterampilan yang dibutuhkan dan yang sudah tersedia dalam tim belum jelas, sehingga harus bertanya manual.</p>
                </div>

                <div class="problem-card">
                    <span class="num-pill">03</span>
                    <h3>Perekrutan Belum Terstruktur</h3>
                    <p>Pengumpulan minat, pemeriksaan profil calon anggota, dan pengelolaan pengajuan masih dilakukan secara terpisah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW TEMPA WORKS -->
    <section class="how-section">
        <div class="container">
            <div class="how-header">
                <h2 class="how-title">How TEMPA<br>Works</h2>
                <p class="how-desc">Satu alur digital untuk menemukan dan membentuk tim kompetisi, dari publikasi kebutuhan sampai kolaborasi.</p>
            </div>

            <div class="how-grid-4">
                <div class="how-card">
                    <div class="how-num">01</div>
                    <h4>Publish</h4>
                    <p>Ketua tim membuat Finding Partner: info kompetisi, jumlah anggota, keterampilan, dan tenggat pengajuan.</p>
                </div>

                <div class="how-card">
                    <div class="how-num">02</div>
                    <h4>Discover</h4>
                    <p>Mahasiswa mencari dan menyaring lowongan berdasarkan kompetisi, kategori, status, dan keterampilan.</p>
                </div>

                <div class="how-card">
                    <div class="how-num">03</div>
                    <h4>Apply & Select</h4>
                    <p>Calon anggota mengajukan diri dengan profil dan alasan bergabung. Ketua tim menerima atau menolak.</p>
                </div>

                <div class="how-card">
                    <div class="how-num">04</div>
                    <h4>Analyze</h4>
                    <p>Skill-Gap Analyzer membandingkan keterampilan yang dibutuhkan dengan milik seluruh anggota tim.</p>
                </div>
            </div>

            <div class="how-card-full">
                <div class="how-num">05</div>
                <h4 style="font-size: 15px; font-weight: 800; margin-bottom: 6px;">Collaborate</h4>
                <p style="font-size: 13px; color: #4b4763;">Ketua tim memperoleh gambaran komposisi keterampilan serta komponen yang masih perlu dilengkapi.</p>
            </div>
        </div>
    </section>

    <!-- SKILL-GAP ANALYZER -->
    <section class="skillgap-section">
        <div class="container">
            <div class="skillgap-grid">
                <div>
                    <div class="section-badge-pink">SKILL-GAP ANALYZER</div>
                    <h2 class="skillgap-title">Lihat keterampilan yang sudah terpenuhi dan yang masih kurang.</h2>
                    <p class="skillgap-desc">
                        Tidak perlu lagi bertanya satu per satu. Bandingkan kebutuhan kompetensi tim dengan keterampilan setiap anggota, lalu putuskan peran apa yang perlu direkrut berikutnya.
                    </p>
                    <a href="/dashboard" class="btn-primary-pill" style="display: inline-block; padding: 13px 26px;">
                        Lihat contoh dashboard tim
                    </a>
                </div>

                <div class="skillgap-card">
                    <div class="legend-row">
                        <div class="legend-item"><span class="dot-dark"></span> Dibutuhkan</div>
                        <div class="legend-item"><span class="dot-light"></span> Dimiliki</div>
                    </div>

                    <div class="skill-bar-group">
                        <div class="skill-bar-header">
                            <span>Machine Learning</span>
                            <span class="status-kurang">Kurang</span>
                        </div>
                        <div class="bar-track"><div class="bar-fill-needed" style="width: 85%;"></div></div>
                        <div class="bar-track"><div class="bar-fill-owned" style="width: 42%;"></div></div>
                    </div>

                    <div class="skill-bar-group">
                        <div class="skill-bar-header">
                            <span>Computer Vision</span>
                            <span class="status-kurang">Kurang</span>
                        </div>
                        <div class="bar-track"><div class="bar-fill-needed" style="width: 78%;"></div></div>
                        <div class="bar-track"><div class="bar-fill-owned" style="width: 28%;"></div></div>
                    </div>

                    <div class="skill-bar-group">
                        <div class="skill-bar-header">
                            <span>Fullstack Development</span>
                            <span class="status-terpenuhi">Terpenuhi</span>
                        </div>
                        <div class="bar-track"><div class="bar-fill-needed" style="width: 72%;"></div></div>
                        <div class="bar-track"><div class="bar-fill-owned" style="width: 82%;"></div></div>
                    </div>

                    <div class="skill-bar-group">
                        <div class="skill-bar-header">
                            <span>UI/UX Design</span>
                            <span class="status-terpenuhi">Terpenuhi</span>
                        </div>
                        <div class="bar-track"><div class="bar-fill-needed" style="width: 65%;"></div></div>
                        <div class="bar-track"><div class="bar-fill-owned" style="width: 90%;"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>