<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ($tab ?? 'masuk') === 'daftar' ? 'Daftar - TEMPA' : 'Masuk - TEMPA' }}</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

    <!-- Cahaya Latar Belakang -->
    <div class="bg-glow-top"></div>
    <div class="bg-glow-bottom"></div>

    <!-- Header Atas -->
    <header class="navbar">
        <a href="/" class="brand">
            <img src="{{ asset('images/logo.png') }}" alt="Logo TEMPA" style="height: 32px; width: auto;">
        </a>

        <a href="/" class="btn-back">← Kembali ke Beranda</a>
    </header>

    <!-- Konten Utama -->
    <main class="main-wrapper">

        <!-- KARTU KIRI (Banner Ungu) -->
        <section class="card-banner">
            <div class="banner-glow-tr"></div>
            <div class="banner-glow-bl"></div>

            <div>
                <div class="badge-platform">SATU PLATFORM</div>
                <h1 class="banner-title">Temukan Partner.<br>Wujudkan Prestasi.</h1>
                <p class="banner-desc">
                    Masuk untuk membuat Finding Partner, mengajukan diri ke tim kompetisi, dan memantau proses seleksi dalam satu tempat.
                </p>
            </div>

            <div class="feature-list">
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <span class="feature-text">Cari lowongan sesuai keterampilan dan minat</span>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    </div>
                    <span class="feature-text">Ngobrol dulu dengan ketua tim sebelum diputuskan</span>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                    </div>
                    <span class="feature-text">Lihat kesenjangan keterampilan tim dengan Skill-Gap Analyzer</span>
                </div>
            </div>
        </section>

        <!-- KARTU KANAN (Form Masuk & Daftar) -->
        <section class="card-form">
            <div>
                <!-- Tab Masuk & Daftar -->
                <div class="tab-switcher">
                    <button type="button" id="tab-masuk" class="tab-btn {{ ($tab ?? 'masuk') === 'masuk' ? 'active' : '' }}">Masuk</button>
                    <button type="button" id="tab-daftar" class="tab-btn {{ ($tab ?? 'masuk') === 'daftar' ? 'active' : '' }}">Daftar</button>
                </div>

                <!-- Pesan Error -->
                @if ($errors->any())
                    <div style="background: #fef2f2; border: 1px solid #fecaca; color: #b91c1c; padding: 12px 16px; border-radius: 12px; font-size: 13px; margin-bottom: 18px;">
                        <ul style="margin-left: 16px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- FORM MASUK -->
                <div id="form-masuk" style="display: {{ ($tab ?? 'masuk') === 'masuk' ? 'block' : 'none' }};">
                    <h2 class="form-title">Selamat datang kembali!</h2>
                    <p class="form-subtitle">Masuk untuk melanjutkan pencarian partner kompetisimu.</p>

                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="label-row">
                                <label class="form-label" for="login-email">Email mahasiswa</label>
                            </div>
                            <input type="email" id="login-email" name="email" class="form-input" placeholder="nama@student.ub.ac.id" required>
                        </div>

                        <div class="form-group">
                            <div class="label-row">
                                <label class="form-label" for="login-password">Kata sandi</label>
                                <a href="#" class="forgot-link">Lupa kata sandi?</a>
                            </div>
                            <input type="password" id="login-password" name="password" class="form-input" placeholder="Masukkan kata sandi" required>
                        </div>

                        <label class="remember-row">
                            <input type="checkbox" name="remember">
                            <span>Ingat saya di perangkat ini</span>
                        </label>

                        <button type="submit" class="btn-submit">Masuk</button>
                    </form>

                    <p class="form-footer">
                        Belum punya akun? <a href="#" id="link-ke-daftar">Daftar sekarang</a>
                    </p>
                </div>

                <!-- FORM DAFTAR -->
                <div id="form-daftar" style="display: {{ ($tab ?? 'masuk') === 'daftar' ? 'block' : 'none' }};">
                    <h2 class="form-title">Selamat datang!</h2>
                    <p class="form-subtitle">Daftar untuk mulai menemukan partner kompetisi terbaikmu.</p>

                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="label-row">
                                <label class="form-label" for="reg-name">Nama lengkap</label>
                            </div>
                            <input type="text" id="reg-name" name="name" class="form-input" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <div class="form-group">
                            <div class="label-row">
                                <label class="form-label" for="reg-email">Email mahasiswa</label>
                            </div>
                            <input type="email" id="reg-email" name="email" class="form-input" placeholder="nama@student.ub.ac.id" required>
                        </div>

                        <div class="form-group">
                            <div class="label-row">
                                <label class="form-label" for="reg-password">Kata sandi</label>
                            </div>
                            <input type="password" id="reg-password" name="password" class="form-input" placeholder="Masukkan kata sandi" required>
                        </div>

                        <div class="form-group">
                            <div class="label-row">
                                <label class="form-label" for="reg-password-confirm">Konfirmasi kata sandi</label>
                            </div>
                            <input type="password" id="reg-password-confirm" name="password_confirmation" class="form-input" placeholder="Masukkan ulang kata sandi" required>
                        </div>

                        <div class="form-group">
                            <div class="label-row">
                                <label class="form-label" for="reg-fakultas">Fakultas</label>
                            </div>
                            <input type="text" id="reg-fakultas" name="fakultas" class="form-input" placeholder="Masukkan fakultas" required>
                        </div>

                        <div class="form-group">
                            <div class="label-row">
                                <label class="form-label" for="reg-prodi">Program studi</label>
                            </div>
                            <input type="text" id="reg-prodi" name="program_studi" class="form-input" placeholder="Masukkan program studi" required>
                        </div>

                        <div class="form-group">
                            <div class="label-row">
                                <label class="form-label" for="reg-angkatan">Angkatan</label>
                            </div>
                            <input type="number" id="reg-angkatan" name="angkatan" class="form-input" placeholder="Masukkan angkatan" required>
                        </div>

                        <button type="submit" class="btn-submit" style="margin-top: 8px;">Daftar</button>
                    </form>

                    <p class="form-footer">
                        Sudah punya akun? <a href="#" id="link-ke-masuk">Masuk sekarang</a>
                    </p>
                </div>
            </div>
        </section>

    </main>

    <script src="{{ asset('js/auth.js') }}"></script>
</body>
</html>