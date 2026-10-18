@extends('layouts.front')

@section('title', 'Training Pelatihan Fumigasi Provinsi ' . $province['name'] . ' | Sertifikasi Resmi')
@section('meta_description', 'Layanan informasi konsultasi pelatihan dan sertifikasi kompetensi Fumigasi bagi tenaga kerja profesional yang berdomisili atau bertugas di Provinsi ' . $province['name'] . '.')

@section('content')

    <!-- HERO SECTION (PROVINSI) -->
    <section class="hero-section" style="padding-top: 40px; text-align: left;">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="breadcrumb-bar" style="margin-bottom: 20px;">
                <a href="{{ route('home') }}"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('home') }}#wilayah">Wilayah</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 600;">{{ $province['name'] }}</span>
            </div>

            <div class="hero-badge">
                <i class="bi bi-geo-alt-fill"></i>
                Layanan Informasi & Konsultasi Pelatihan Fumigasi
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.3rem;">
                TRAINING PELATIHAN FUMIGASI<br>
                <span class="text-highlight">PROVINSI {{ strtoupper($province['name']) }}</span>
            </h1>

            <p class="hero-desc" style="margin-left: 0;">
                Halaman ini menyediakan informasi konsultasi pelatihan dan sertifikasi Fumigasi bagi tenaga kerja profesional dan industri yang berdomisili atau bertugas di Provinsi {{ $province['name'] }}.
            </p>

            <div class="hero-actions" style="justify-content: flex-start; margin-bottom: 40px;">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-gold">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi untuk Wilayah {{ $province['name'] }}
                </a>
            </div>

            <!-- Stats Bar -->
            <div class="hero-stats" style="margin-left: 0; max-width: 800px; text-align: left;">
                <div class="stat-item">
                    <p>Pulau</p>
                    <h3 style="font-size: 1.25rem;">{{ $province['island'] }}</h3>
                </div>
                <div class="stat-item">
                    <p>Kab/Kota</p>
                    <h3 style="font-size: 1.25rem;">{{ $province['total_kabkot'] }}</h3>
                </div>
                <div class="stat-item">
                    <p>Jenjang</p>
                    <h3 style="font-size: 1.25rem;">{{ count($programs) }} Program</h3>
                </div>
                <div class="stat-item">
                    <p>Layanan</p>
                    <h3 style="font-size: 1.25rem;">Konsultatif</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- NOTICE CONTAINER -->
    <div class="container notice-container">
        <div class="notice-card">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <div>
                <strong>Catatan penting:</strong> Halaman ini adalah halaman informasi dan konsultasi. Penyelenggaraan pelatihan Fumigasi di kota atau kabupaten berada dalam Provinsi {{ $province['name'] }} termasuk jadwal, lokasi, biaya dan sertifikasi resmi harus dikonfirmasi melalui konsultan terverifikasi. Kami siap memfasilitasi kebutuhan pelatihan kelas publik maupun in-house training di lokasi fasilitas Anda.
            </div>
        </div>
    </div>

    <!-- PROGRAM YANG TERSEDIA (MATCHING SCREENSHOT 2) -->
    <section class="section-padding" style="padding-top: 20px;">
        <div class="container">
            <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                <span class="section-badge">10 Program Pelatihan Resmi</span>
                <h2 class="section-title">Program Pelatihan Fumigasi yang Tersedia di {{ $province['name'] }}</h2>
                <p class="section-subtitle" style="margin-left: 0;">
                    Tersedia 10 program pelatihan dan sertifikasi lengkap untuk memenuhi kebutuhan teknisi, supervisor, penanggung jawab, serta spesialisasi kemasan ekspor di Provinsi {{ $province['name'] }}:
                </p>
            </div>

            <div class="programs-grid">
                @foreach($programs as $prog)
                    <div class="program-card {{ $loop->iteration <= 2 ? 'featured' : '' }}" style="display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div class="program-level">{{ $prog->level_name }}</div>
                            <h3 class="program-title" style="font-size: 1.15rem; font-weight: 700; line-height: 1.4; margin-bottom: 10px;">
                                <a href="{{ route('wilayah.provinsi.program', [$province['slug'], $prog->slug]) }}" style="color: inherit; text-decoration: none;">
                                    {{ $prog->title }} — {{ $province['name'] }}
                                </a>
                            </h3>
                            <p class="program-desc" style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin-bottom: 14px;">
                                {{ $prog->short_description }}
                            </p>

                            <div style="margin-bottom: 20px; font-size: 0.82rem; color: #475569; line-height: 1.6; border-top: 1px solid #f1f5f9; padding-top: 14px;">
                                <strong>Materi & Silabus Pokok:</strong>
                                <p style="margin-top: 4px; color: #64748b;">
                                    {{ implode(', ', array_slice($prog->curriculum ?? [], 0, 3)) }}...
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-top: auto; padding-top: 12px; border-top: 1px dashed #e2e8f0;">
                            <a href="{{ route('wilayah.provinsi.program', [$province['slug'], $prog->slug]) }}" style="flex: 1; min-width: 140px; text-align: center; background: #0f766e; color: #fff; padding: 10px 14px; border-radius: 8px; font-weight: 700; font-size: 0.84rem; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 6px; box-shadow: 0 2px 4px rgba(15,118,110,0.2);">
                                <i class="bi bi-file-earmark-text"></i>
                                Detail & Artikel
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin, saya ingin konsultasi pendaftaran ' . $prog->title . ' untuk wilayah Provinsi ' . $province['name'] . '. Mohon info jadwal dan persyaratannya.') }}" target="_blank" style="padding: 10px 14px; font-size: 0.84rem; border-radius: 8px; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 6px; background: #22c55e; color: #fff; font-weight: 700;">
                                <i class="bi bi-whatsapp"></i>
                                Konsultasi WA
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- LIST KAB/KOTA (MATCHING SCREENSHOT 2) -->
    <section class="section-padding" style="background-color: #f8fafc; padding-top: 50px;">
        <div class="container">
            <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                <h2 style="font-size: 1.45rem; font-weight: 800; color: #0f172a;">Kab/Kota di Provinsi {{ $province['name'] }}</h2>
                <p style="font-size: 0.85rem; color: #64748b;">
                    Klik nama kabupaten atau kota di bawah ini untuk melihat detail informasi konsultasi pelatihan di daerah tersebut:
                </p>
            </div>

            <div class="kabkot-grid">
                @foreach($province['kabkot'] as $kk)
                    <a href="{{ route('wilayah.kabkot', [$province['slug'], $kk['slug']]) }}" class="kabkot-btn">
                        {{ $kk['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ PROVINSI -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Tanya Jawab</span>
                <h2 class="section-title">FAQ: Pelatihan Fumigasi di {{ $province['name'] }}</h2>
            </div>

            <div class="faq-wrapper">
                <div class="faq-item active">
                    <div class="faq-question">
                        <span>Apakah pelatihan Fumigasi tersedia di wilayah Provinsi {{ $province['name'] }}?</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Ya, kami melayani bimbingan dan pelatihan sertifikasi fumigasi bagi peserta dari Provinsi {{ $province['name'] }}, baik melalui kelas publik terpusat maupun in-house training langsung ke fasilitas gudang, pabrik, atau pelabuhan perusahaan Anda.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Jenjang apa saja yang tersedia untuk Fumigasi?</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Tersedia 3 jenjang pembinaan resmi: Fumigasi Tingkat Muda (Operator / Teknisi Lapangan), Fumigasi Tingkat Madya (Supervisor & Inspektur Karantina), serta Fumigasi Tingkat Utama & Standar Ekspor AFAS / ISPM 15.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Bagaimana cara mendapatkan informasi jadwal dan biaya pelatihan di {{ $province['name'] }}?</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Silakan klik tombol "Konsultasi untuk Wilayah {{ $province['name'] }}" untuk langsung terhubung dengan konsultan resmi kami via WhatsApp. Kami akan mengirimkan jadwal batch terdekat, silabus materi, dan penawaran investasi.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Apakah tersedia pelatihan in-house untuk perusahaan di {{ $province['name'] }}?</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Ya, tim instruktur kami dapat hadir langsung memberikan pelatihan in-house di fasilitas pergudangan atau operasional perusahaan Anda di seluruh wilayah Provinsi {{ $province['name'] }}.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA BANNER DARK (MATCHING SCREENSHOT 2) -->
    <div class="container">
        <div class="cta-dark-banner">
            <h2>KONSULTASI PELATIHAN FUMIGASI<br><span>PROVINSI {{ strtoupper($province['name']) }}</span></h2>
            <p>
                Hubungi konsultan kami untuk mendapatkan informasi jadwal, biaya, dan panduan kelengkapan berkas administrasi yang sesuai dengan kebutuhan Anda di {{ $province['name'] }}.
            </p>
            <div class="cta-banner-buttons">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-gold">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi Sekarang
                </a>
                <a href="{{ route('home') }}" class="btn-outline-light">
                    Kembali ke Beranda
                </a>
            </div>

            <div style="margin-top: 36px; font-size: 0.78rem; color: #64748b; display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
                <span>Training Fumigasi Muda</span>
                <span>•</span>
                <span>Training Fumigasi Madya</span>
                <span>•</span>
                <span>Training Fumigasi Utama</span>
            </div>
        </div>
    </div>

@endsection
