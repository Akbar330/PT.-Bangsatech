@php
    $services = [
        ['mark' => 'MS', 'brand' => 'MySCH.id', 'title' => 'Website Sekolah', 'copy' => 'Website resmi sekolah dengan fitur profil, berita, prestasi, PPDB, agenda, dan pengumuman yang mudah diakses.'],
        ['mark' => 'SP', 'brand' => 'MitraSPMB', 'title' => 'MitraSPMB', 'copy' => 'Sistem penerimaan siswa baru online yang membantu panitia mengelola pendaftaran, seleksi, dan laporan lebih efisien.'],
        ['mark' => 'OK', 'brand' => 'Okelah', 'title' => 'Aplikasi Keuangan', 'copy' => 'Aplikasi keuangan sekolah untuk transaksi, tagihan, rekap pembayaran, dan pelaporan yang lebih transparan.'],
        ['mark' => 'US', 'brand' => 'UjianSekolah.id', 'title' => 'Ujian Sekolah', 'copy' => 'Platform ujian online yang cepat, akurat, dan mudah dipakai oleh guru serta siswa dari berbagai jenjang.'],
    ];

    $reasons = [
        ['icon' => 'shield-check', 'title' => 'Perusahaan Jelas', 'copy' => 'Beroperasi secara legal, transparan, dan siap mempertanggungjawabkan setiap pekerjaan.'],
        ['icon' => 'medal', 'title' => 'Tim Profesional', 'copy' => 'Engineer berpengalaman dalam perencanaan, pengembangan, dan pendampingan sistem sekolah.'],
        ['icon' => 'hourglass', 'title' => 'Lebih Dari 10 Tahun', 'copy' => 'Mendampingi dunia teknologi informasi dari perancangan sampai pemeliharaan produk digital.'],
        ['icon' => 'smartphone', 'title' => 'Portofolio Teruji', 'copy' => 'Telah mengerjakan website, aplikasi sekolah, sistem informasi, dan solusi digital berskala luas.'],
        ['icon' => 'hand-heart', 'title' => 'Dipercaya Mitra', 'copy' => 'Ribuan pengguna dari lembaga pendidikan telah memakai dan berkembang bersama solusi kami.'],
        ['icon' => 'headset', 'title' => 'Full Support', 'copy' => 'Pendampingan dari konsultasi, desain, implementasi, pelatihan, maintenance, hingga pengembangan.'],
    ];

    $customers = $customers ?? collect();
    $testimonials = $testimonials ?? collect();
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PT Bangsatech Indonesia, mitra IT sekolah untuk website sekolah, aplikasi pendidikan, SPMB, ujian online, dan digitalisasi sekolah.">
    <title>PT Bangsatech Indonesia</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header" id="top">
        <a class="brand" href="#top" aria-label="PT Bangsatech Indonesia">
            <img src="{{ asset('new_logo.png') }}" alt="PT Bangsatech Indonesia" class="navbar-logo">
        </a>

        <button class="nav-toggle" type="button" aria-label="Buka menu" aria-expanded="false" aria-controls="site-nav">
            <span></span><span></span><span></span>
        </button>

        <nav class="site-nav" id="site-nav">
            <a href="#top">Home</a>
            <a href="#company">Tentang</a>
            <a href="#services">Layanan</a>
            <a href="#customers">Pelanggan</a>
            <a href="#testimonials">Testimoni</a>
            <a href="#contact">Hubungi Kami</a>
        </nav>
    </header>

    <main>
        <section class="hero section-soft">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <h1>Layanan Percepatan Digitalisasi Sekolah Terbaik</h1>
                    <p class="lead"><strong>Tingkatkan Mutu Layanan Pendidikan Bersama Mitra IT Sekolah Terpercaya Bangsatech.id</strong></p>
                    <p>Buat website sekolah dan aplikasi pendidikan Anda sekarang juga bersama kami.</p>
                    <a class="button-primary" href="#contact">Hubungi Kami</a>
                </div>

                <div class="hero-showcase" aria-label="Ilustrasi produk digital sekolah">
                    <div class="metric metric-left"><strong>50.000+</strong><span>Pengguna MySCH</span></div>
                    <div class="metric metric-right"><strong>10 Tahun</strong><span>Melayani sekolah Indonesia</span></div>
                    <div class="metric metric-bottom"><strong>15 Program</strong><span>Telah diakses berbagai sekolah</span></div>
                    <div class="laptop">
                        <div class="browser-bar"></div>
                        <div class="screen-content">
                            <span>Portal Sekolah Digital</span>
                            <strong>Kelola profil, berita, SPMB, ujian, dan laporan dalam satu ekosistem.</strong>
                        </div>
                    </div>
                    <div class="phone">
                        <span>1070</span>
                        <small>Jumlah siswa</small>
                        <span>34</span>
                        <small>Rombel aktif</small>
                        <span>311</span>
                        <small>Prestasi</small>
                    </div>
                </div>
            </div>
        </section>

        <section class="welcome">
            <div class="container narrow">
                <h2>Selamat Datang di PT. Bangsatech Indonesia</h2>
                <p>Dengan penuh rasa syukur, kami menyambut Anda di website yang kami persembahkan sebagai langkah nyata dalam mendukung kemajuan pendidikan dan perkembangan digitalisasi sekolah. Kehadiran teknologi digital membuka peluang besar untuk meningkatkan kualitas pendidikan, memperluas akses, serta menciptakan ekosistem belajar yang lebih inklusif dan efisien.</p>
                <p>PT. Bangsatech Indonesia dirancang untuk menjadi jembatan antara pendidikan dan teknologi, dengan menyediakan berbagai fitur serta informasi yang mendukung kebutuhan sekolah, guru, siswa, dan orang tua.</p>
                <p>Melalui berbagai layanan yang selalu kami kembangkan, kami berharap dapat menjadi mitra strategis dalam mendorong transformasi pendidikan ke arah yang lebih baik.</p>
                <p class="signature">Direktur PT. Bangsatech Indonesia,<br><strong>Nailil Fitri</strong></p>
            </div>
        </section>

        <section class="about section-soft" id="company">
            <div class="container">
                <h2 class="section-title">Siapa Kami</h2>
                <div class="about-grid">
                    <div class="team-photo" role="img" aria-label="Tim PT Bangsatech Indonesia">
                        @for ($i = 1; $i <= 14; $i++)
                            <span style="--i: {{ $i }}"></span>
                        @endfor
                    </div>
                    <div class="about-copy">
                        <p>Kami adalah perusahaan yang bergerak di bidang pendidikan dan teknologi informasi. Kami memberikan solusi lengkap dan menyeluruh untuk mendukung kemajuan pendidikan serta perkembangan digitalisasi sekolah.</p>
                        <p>Dengan berkonsultasi bersama tim kami, Anda dapat memperoleh rekomendasi website dan aplikasi terbaik dalam bidang pendidikan sehingga dapat menciptakan layanan sekolah yang berkualitas.</p>
                        <p>Dengan model end to end solution, kami menjadi jawaban atas kebutuhan digitalisasi sekolah Anda di era serba cepat ini.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="services" id="services">
            <div class="container">
                <h2 class="section-title">Layanan Kami</h2>
                <div class="service-grid">
                    @foreach ($services as $service)
                        <article class="service-card">
                            <div class="product-logo"><span>{{ $service['mark'] }}</span>{{ $service['brand'] }}</div>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['copy'] }}</p>
                            <a href="#contact">Selengkapnya <span aria-hidden="true">-></span></a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="reasons">
            <div class="container">
                <h2 class="section-title">Mengapa Memilih Kami</h2>
                <div class="reason-grid">
                    @foreach ($reasons as $reason)
                        <article class="reason-item">
                            <i class="reason-icon" data-lucide="{{ $reason['icon'] }}" aria-hidden="true"></i>
                            <div>
                                <h3>{{ $reason['title'] }}</h3>
                                <p>{{ $reason['copy'] }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="customers" id="customers">
            <div class="container">
                <h2>Pelanggan kami</h2>
                <div class="customer-marquee" aria-label="Daftar pelanggan">
                    <div class="customer-track">
                        @php $loopCustomers = $customers->concat($customers)->concat($customers)->concat($customers); @endphp
                        @foreach ($loopCustomers as $customer)
                            <div class="customer-logo" title="{{ $customer->name }}">
                                @if ($customer->logo)
                                    <img src="{{ asset('storage/'.$customer->logo) }}" alt="{{ $customer->name }}">
                                @else
                                    <span>{{ collect(explode(' ', $customer->name))->map(fn ($word) => $word[0])->take(2)->implode('') }}</span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials section-warm" id="testimonials">
            <p class="eyebrow">TESTIMONI</p>
            <h2 class="section-title">Apa Kata Pelanggan Kami</h2>
            <div class="testimonial-carousel" data-carousel style="--active: {{ $testimonials->count() > 1 ? 1 : 0 }}">
                <div class="testimonial-viewport">
                    <div class="testimonial-track">
                        @foreach ($testimonials as $index => $testimonial)
                            <article class="testimonial-card {{ $index === min(1, $testimonials->count() - 1) ? 'is-active' : '' }}">
                                <h3>{{ $testimonial->title }}</h3>
                                <p>{{ $testimonial->content }}</p>
                                <div class="person">
                                    @if ($testimonial->avatar)
                                        <img src="{{ asset('storage/'.$testimonial->avatar) }}" alt="{{ $testimonial->person_name }}">
                                    @else
                                        <span>{{ substr($testimonial->person_name, 0, 1) }}</span>
                                    @endif
                                    <div>
                                        <strong>{{ $testimonial->person_name }}</strong>
                                        <small>{{ $testimonial->institution }}</small>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="testimonial-dots" aria-label="Navigasi testimoni">
                    @foreach ($testimonials as $index => $testimonial)
                        <button type="button" class="{{ $index === min(1, $testimonials->count() - 1) ? 'is-active' : '' }}" aria-label="Lihat testimoni {{ $index + 1 }}" aria-pressed="{{ $index === min(1, $testimonials->count() - 1) ? 'true' : 'false' }}" data-slide="{{ $index }}"></button>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container cta-grid">
                <div>
                    <h2>Buat Sekolah Anda Selangkah Lebih Maju Dengan Menerapkan Digitalisasi Sekolah Bersama Bangsatech</h2>
                    <div class="cta-actions">
                        <a class="button-primary" href="#contact">Buat Website Sekolah</a>
                        <a class="button-light" href="#services">Buat Aplikasi Sekarang</a>
                    </div>
                </div>
                <div class="device-stack" aria-label="Website sekolah pada laptop, tablet, dan ponsel">
                    <div class="desktop-device"></div>
                    <div class="tablet-device"></div>
                    <div class="mobile-device"></div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer" id="contact">
        <div class="container footer-grid">
            <div class="footer-brand">
                <div class="footer-logo">
                    <span class="brand-mark"><img src="{{ asset('logo_bangsatech.PNG') }}" alt="" srcset=""></span>
                    PT. <span class="brand-text"><strong>BANGSA</strong>TECH</span>
                </div>
                <p>Bangsatech berkomitmen menjadi mitra IT bagi sekolah dalam percepatan digitalisasi dan implementasi ekosistem pendidikan modern.</p>
            </div>
            <div>
                <h3>Services</h3>
                <a href="#services">Website Sekolah</a>
                <a href="#services">Mitra SPMB</a>
                <a href="#services">Aplikasi Keuangan</a>
                <a href="#services">Ujian Sekolah</a>
                <a href="#services">Training & Workshop</a>
            </div>
            <div>
                <h3>Company</h3>
                <a href="#company">Tentang Kami</a>
                <a href="#company">Legalitas Perusahaan</a>
                <a href="#customers">Portofolio</a>
                <a href="#contact">Kontak Kami</a>
            </div>
            <div>
                <h3>Community</h3>
                <a href="#contact">Karir</a>
                <a href="#contact">Internship</a>
                <a href="#contact">Freelance</a>
            </div>
        </div>
        <div class="container footer-bottom">
            <p>© 2026 Bangsatech. All Rights Reserved.</p>
            <div class="socials" aria-label="Sosial media">
                <a href="#" aria-label="Facebook" class="fab fa-facebook-f">f</a>
                <a href="#" aria-label="Instagram" class="fab fa-instagram">ig</a>
                <a href="#" aria-label="YouTube" class="fab fa-youtube">yt</a>
            </div>
        </div>
    </footer>

    <a class="back-top" href="#top" aria-label="Kembali ke atas">↑</a>
</body>
</html>
