@extends('layouts.front')

@section('title', 'Pelatihan & Sertifikasi Fumigasi Indonesia | Standar Barantin & ISPM 15')
@section('meta_description', 'Layanan informasi, bimbingan teknis, dan sertifikasi kompetensi fumigasi resmi berstandar Badan Karantina Indonesia, AFAS, dan ISPM 15.')

@section('content')

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-shield-check"></i>
                Standar Keselamatan & Karantina Fumigasi Nasional
            </div>
            
            <h1 class="hero-title">
                WUJUDKAN OPERASI BEBAS HAMA DENGAN <span class="text-highlight">SERTIFIKASI FUMIGASI</span> RESMI
            </h1>

            <p class="hero-desc">
                Tingkatkan kualifikasi dan kompetensi keselamatan fumigator bagi tenaga kerja profesional di seluruh Indonesia. Tersedia jenjang pembinaan terstruktur untuk level Muda, Madya, hingga Utama berstandar Barantin & ISPM 15.
            </p>

            <div class="hero-actions">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-gold">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi Program via WhatsApp
                </a>
                <a href="#program" class="btn-outline-light">
                    Lihat Jenjang Program
                </a>
            </div>

            <!-- Stats Bar -->
            <div class="hero-stats">
                <div class="stat-item">
                    <h3>3 Jenjang</h3>
                    <p>Muda, Madya, Utama</p>
                </div>
                <div class="stat-item">
                    <h3>Nasional</h3>
                    <p>Tersedia Seluruh RI</p>
                </div>
                <div class="stat-item">
                    <h3>Praktis</h3>
                    <p>Teori & Praktik Lapangan</p>
                </div>
                <div class="stat-item">
                    <h3>Responsif</h3>
                    <p>Layanan Konsultasi 24/7</p>
                </div>
            </div>
        </div>
    </section>

    <!-- NOTICE CONTAINER -->
    <div class="container notice-container">
        <div class="notice-card">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <div>
                <strong>Catatan penting:</strong> Halaman ini adalah halaman informasi dan konsultasi resmi pelatihan teknis fumigasi. Penyelenggaraan pelatihan fumigasi di kota atau kabupaten berada dalam pengawasan standar keselamatan fumigan (Fosfin/PH3 & Metil Bromida/CH3Br) serta regulasi karantina tumbuhan dan K3 nasional.
            </div>
        </div>
    </div>

    <!-- SECTION 1: PROGRAM PELATIHAN -->
    <section class="section-padding" id="program" style="padding-top: 20px;">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Jenjang Pembinaan</span>
                <h2 class="section-title">Tiga Jenjang Sertifikasi Pelatihan Fumigasi</h2>
                <p class="section-subtitle">
                    Pilih program pelatihan yang sesuai dengan peran dan tanggung jawab teknis Anda di industri pergudangan, logistik, dan ekspor.
                </p>
            </div>

            <div class="programs-grid">
                @foreach($programs as $prog)
                    <div class="program-card {{ $prog->badge === 'Paling Diminati' || $prog->badge === 'Populer' ? 'featured' : '' }}">
                        @if($prog->badge)
                            <div class="program-badge-top">{{ $prog->badge }}</div>
                        @endif

                        <div class="program-level">{{ $prog->level_name }}</div>
                        <h3 class="program-title">{{ $prog->title }}</h3>
                        <p class="program-desc">{{ $prog->short_description }}</p>

                        <ul class="program-features">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span><strong>Durasi:</strong> {{ $prog->duration ?? 'Sesuai Kurikulum' }}</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span><strong>Metode:</strong> {{ $prog->method ?? 'Tatap Muka & Praktik' }}</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span><strong>Sertifikat:</strong> {{ Str::limit($prog->certification, 45) }}</span>
                            </li>
                        </ul>

                        <a href="https://api.whatsapp.com/send?phone={{ \App\Models\Setting::get('whatsapp_number', '6281234567890') }}&text={{ urlencode('Halo Admin, saya ingin konsultasi pendaftaran ' . $prog->title . '. Mohon info jadwal dan persyaratannya.') }}" target="_blank" class="btn-card-wa">
                            <i class="bi bi-whatsapp"></i>
                            Konsultasi Jenjang Ini
                        </a>

                        <a href="{{ route('program.detail', $prog->slug) }}" class="btn-card-detail">
                            Lihat Detail Program & Silabus <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION 2: KEUNGGULAN -->
    <section class="section-padding" id="keunggulan" style="background-color: #f8fafc;">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Mengapa Memilih Kami</span>
                <h2 class="section-title">Keunggulan Layanan Bimbingan Fumigasi</h2>
                <p class="section-subtitle">
                    Fasilitas bimbingan komprehensif didukung praktisi senior berpengalaman puluhan tahun di bidang karantina dan keselamatan kimia.
                </p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3 class="advantage-title">Sesuai Regulasi Barantin</h3>
                    <p class="advantage-desc">
                        Kurikulum mengacu pada standar resmi Badan Karantina Indonesia, acuan AFAS Australia, dan protokol perlakuan kemasan kayu ISPM 15.
                    </p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-person-workspace"></i>
                    </div>
                    <h3 class="advantage-title">Praktik Lapangan Nyata</h3>
                    <p class="advantage-desc">
                        Simulasi langsung pembuatan sungkup kedap gas (gas-tight), teknik injeksi gas, pengoperasian SCBA, dan deteksi kebocoran.
                    </p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-award"></i>
                    </div>
                    <h3 class="advantage-title">Sertifikasi Terakreditasi</h3>
                    <p class="advantage-desc">
                        Sertifikat kompetensi resmi yang diakui industri pergudangan, logistik pelabuhan, PCO, serta otoritas karantina tumbuhan & hewan.
                    </p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h3 class="advantage-title">Akses Cepat & Responsif</h3>
                    <p class="advantage-desc">
                        Tim konsultan siap merespons cepat kebutuhan kelas in-house perusahaan, public class, maupun pendampingan audit berkala.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: FAQ -->
    <section class="section-padding" id="faq">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Tanya Jawab</span>
                <h2 class="section-title">Pertanyaan yang Sering Diajukan (FAQ)</h2>
                <p class="section-subtitle">
                    Temukan jawaban atas pertanyaan umum seputar teknis pelatihan, persyaratan peserta, dan legalitas sertifikasi.
                </p>
            </div>

            <div class="faq-wrapper">
                @foreach($faqs as $index => $faq)
                    <div class="faq-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="faq-question">
                            <span>{{ $faq->question }}</span>
                            <i class="bi bi-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            {{ $faq->answer }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION 4: ARTIKEL & PANDUAN -->
    @if($articles->count() > 0)
    <section class="section-padding" id="artikel" style="background-color: #f8fafc;">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Edukasi & Literasi</span>
                <h2 class="section-title">Artikel & Panduan Fumigasi</h2>
                <p class="section-subtitle">
                    Wawasan terupdate mengenai teknik aplikasi fumigan, standar keselamatan kerja, dan regulasi karantina ekspor.
                </p>
            </div>

            <div class="articles-grid">
                @foreach($articles as $art)
                    <div class="article-card">
                        <div class="article-img-wrap" style="height: 190px; background: linear-gradient(135deg, #0f223d 0%, #1e3a8a 100%);">
                            <i class="bi bi-shield-shaded" style="font-size: 2.8rem; color: rgba(245, 158, 11, 0.8);"></i>
                            <div class="article-category-badge">{{ $art->category }}</div>
                        </div>
                        <div class="article-body">
                            <div class="article-meta" style="justify-content: space-between; margin-bottom: 12px;">
                                <span style="font-size: 0.76rem; color: #64748b; font-weight: 600;">
                                    {{ $art->published_at ? $art->published_at->format('d M Y') : 'Terbaru' }}
                                </span>
                                @if($art->region)
                                    <span style="border: 1px solid #cbd5e1; font-size: 0.68rem; font-weight: 700; color: #334155; padding: 2px 10px; border-radius: 20px;">
                                        {{ $art->region }}
                                    </span>
                                @endif
                            </div>
                            <h3 class="article-title" style="font-size: 1.05rem; font-weight: 800; line-height: 1.45; color: #0f172a; margin-bottom: 10px;">
                                <a href="{{ route('article.detail', $art->slug) }}">{{ $art->title }}</a>
                            </h3>
                            <p class="article-excerpt" style="font-size: 0.84rem; color: #64748b; line-height: 1.6; margin-bottom: 16px;">
                                {{ Str::limit($art->excerpt, 130) }}
                            </p>
                            <a href="{{ route('article.detail', $art->slug) }}" class="article-link" style="color: #d97706; font-weight: 700;">
                                Baca Selengkapnya <i class="bi bi-chevron-right" style="font-size: 0.75rem;"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div style="text-align: center; margin-top: 36px;">
                <a href="{{ route('articles') }}" class="btn-outline-light" style="background: #ffffff; color: #0f172a; border-color: #cbd5e1; display: inline-flex;">
                    Lihat Semua Artikel & Panduan <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    @endif

    <!-- SECTION 5: CTA BANNER DARK -->
    <div class="container">
        <div class="cta-dark-banner">
            <h2>SIAPKAN KOMPETENSI <span>FUMIGASI ANDA HARI INI</span></h2>
            <p>
                Hubungi konsultan kami sekarang untuk mendapatkan rekomendasi program pelatihan yang tepat dan panduan administrasi pendaftaran.
            </p>
            <div class="cta-banner-buttons">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-gold">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi di WhatsApp Sekarang
                </a>
                <a href="{{ route('contact') }}" class="btn-outline-light">
                    Kirim Formulir Permohonan
                </a>
            </div>
        </div>
    </div>

    <!-- SECTION 6: JELAJAHI WILAYAH & 514 KABUPATEN/KOTA SE-INDONESIA -->
    <section class="section-padding" id="wilayah" style="padding-top: 30px; background: #f8fafc;">
        <div class="container">
            <div class="section-header" style="text-align: left; margin-bottom: 25px;">
                <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 10px;">
                    <span style="background: #0f172a; color: var(--primary-gold); font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.5px;">
                        <i class="bi bi-geo-alt-fill"></i> Cakupan Seluruh Indonesia
                    </span>
                    <span style="background: #e0f2fe; color: #0369a1; font-size: 0.76rem; font-weight: 700; padding: 4px 12px; border-radius: 20px;">
                        38 Provinsi Lengkap
                    </span>
                    <span style="background: #ecfdf5; color: #047857; font-size: 0.76rem; font-weight: 700; padding: 4px 12px; border-radius: 20px;">
                        514 Kabupaten & Kota
                    </span>
                </div>
                <h2 style="font-size: 1.85rem; font-weight: 800; color: #0f172a; line-height: 1.3; margin-bottom: 8px;">
                    Jelajahi Wilayah, Kabupaten & Kota Lengkap se-Indonesia
                </h2>
                <p style="font-size: 0.92rem; color: #64748b; max-width: 900px; line-height: 1.65; margin: 0;">
                    Layanan resmi pelatihan dan sertifikasi kompetensi fumigasi menjangkau seluruh 38 Provinsi serta 514 Kabupaten dan Kota di Indonesia. Setiap daerah didukung 10 Program Layanan Teknis dan kurikulum perlakuan berstandar Badan Karantina Indonesia & FAO ISPM 15.
                </p>
            </div>

            <!-- SEARCH & CONTROLS TOOLBAR -->
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px; margin-bottom: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
                <div style="display: flex; gap: 14px; flex-wrap: wrap; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                    <!-- Live Search Box -->
                    <div style="flex: 1; min-width: 280px; position: relative;">
                        <i class="bi bi-search" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 1rem;"></i>
                        <input type="text" id="kabkotSearchInput" placeholder="Ketik nama Kota, Kabupaten, atau Provinsi (contoh: Medan, Surabaya, Makassar, Banda Aceh)..." 
                               style="width: 100%; padding: 12px 16px 12px 42px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem; outline: none; transition: all 0.2s ease;">
                    </div>
                    <!-- Action Toggle -->
                    <div style="display: flex; gap: 8px;">
                        <button type="button" id="btnExpandAll" style="background: #0f766e; color: #ffffff; border: none; padding: 10px 16px; border-radius: 8px; font-weight: 700; font-size: 0.82rem; cursor: pointer; display: inline-flex; align-items: center; gap: 6px;">
                            <i class="bi bi-chevron-expand"></i> Buka Semua Kota (514)
                        </button>
                        <button type="button" id="btnCollapseAll" style="background: #f1f5f9; color: #475569; border: 1px solid #cbd5e1; padding: 10px 16px; border-radius: 8px; font-weight: 700; font-size: 0.82rem; cursor: pointer; display: inline-flex; align-items: center; gap: 6px;">
                            <i class="bi bi-chevron-contract"></i> Tutup Semua
                        </button>
                    </div>
                </div>

                <!-- Island Filter Tabs -->
                <div style="display: flex; gap: 8px; flex-wrap: wrap; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 14px;">
                    <span style="font-size: 0.78rem; font-weight: 700; color: #64748b; margin-right: 4px;">Filter Pulau:</span>
                    <button type="button" class="island-filter-btn active" data-island="all" style="background: #0f172a; color: #ffffff; border: none; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; cursor: pointer;">
                        Semua Pulau (38)
                    </button>
                    <button type="button" class="island-filter-btn" data-island="Sumatera" style="background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 600; cursor: pointer;">
                        Sumatera (10)
                    </button>
                    <button type="button" class="island-filter-btn" data-island="Jawa" style="background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 600; cursor: pointer;">
                        Jawa (6)
                    </button>
                    <button type="button" class="island-filter-btn" data-island="Kalimantan" style="background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 600; cursor: pointer;">
                        Kalimantan (5)
                    </button>
                    <button type="button" class="island-filter-btn" data-island="Sulawesi" style="background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 600; cursor: pointer;">
                        Sulawesi (6)
                    </button>
                    <button type="button" class="island-filter-btn" data-island="Kepulauan Nusa Tenggara" style="background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 600; cursor: pointer;">
                        Bali & Nusa Tenggara (3)
                    </button>
                    <button type="button" class="island-filter-btn" data-island="Maluku" style="background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 600; cursor: pointer;">
                        Maluku (2)
                    </button>
                    <button type="button" class="island-filter-btn" data-island="Papua" style="background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 600; cursor: pointer;">
                        Papua (6)
                    </button>
                    <span id="searchResultCount" style="margin-left: auto; font-size: 0.8rem; color: #0f766e; font-weight: 700; display: none;"></span>
                </div>
            </div>

            <!-- LIST OF ALL 38 PROVINCES WITH FULL 514 KAB/KOTA -->
            <div id="provincesAccordionList" style="display: flex; flex-direction: column; gap: 16px;">
                @foreach($provinces as $prov)
                    <div class="province-region-box" data-island="{{ $prov['island'] }}" data-province="{{ strtolower($prov['name']) }}"
                         style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; transition: all 0.25s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.02);">
                        
                        <!-- Province Header Bar -->
                        <div class="province-header-bar" style="padding: 18px 24px; display: flex; justify-content: space-between; align-items: center; gap: 16px; flex-wrap: wrap; background: #ffffff; border-bottom: 1px solid #f1f5f9; cursor: pointer;">
                            <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                                <span style="display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; background: #0f172a; color: var(--primary-gold); border-radius: 8px; font-weight: 800; font-size: 0.85rem;">
                                    {{ $loop->iteration }}
                                </span>
                                <div>
                                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0; line-height: 1.3;">
                                        {{ $prov['name'] }}
                                    </h3>
                                    <div style="display: flex; align-items: center; gap: 8px; margin-top: 3px;">
                                        <span style="font-size: 0.74rem; color: #64748b; font-weight: 600;">
                                            <i class="bi bi-compass"></i> Pulau {{ $prov['island'] }}
                                        </span>
                                        <span style="font-size: 0.74rem; color: #cbd5e1;">•</span>
                                        <span style="font-size: 0.74rem; background: #fef3c7; color: #92400e; font-weight: 700; padding: 2px 8px; border-radius: 12px;">
                                            {{ $prov['total_kabkot'] }} Kabupaten & Kota
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div style="display: flex; align-items: center; gap: 10px; margin-left: auto;">
                                <a href="{{ route('wilayah.provinsi', $prov['slug']) }}" class="btn-prov-link" onclick="event.stopPropagation();" 
                                   style="padding: 8px 16px; font-size: 0.82rem; font-weight: 700; color: #0f766e; background: #f0fdfa; border: 1px solid #99f6e4; border-radius: 6px; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-box-arrow-up-right"></i> Halaman Provinsi
                                </a>
                                <button type="button" class="btn-toggle-kabkot" 
                                        style="background: #f8fafc; color: #334155; border: 1px solid #cbd5e1; padding: 8px 16px; border-radius: 6px; font-size: 0.82rem; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 6px;">
                                    <span>Lihat Kota/Kabupaten ({{ $prov['total_kabkot'] }})</span>
                                    <i class="bi bi-chevron-down toggle-icon" style="transition: transform 0.25s ease;"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Collapsible Kab/Kot Grid -->
                        <div class="kabkot-collapsible-content" style="display: none; padding: 20px 24px; background: #fafafa; border-top: 1px dashed #e2e8f0;">
                            <div style="margin-bottom: 12px; font-size: 0.82rem; color: #64748b; font-weight: 600;">
                                Pilih Kabupaten / Kota di <strong>Provinsi {{ $prov['name'] }}</strong> untuk melihat detail 10 program dan artikel teknis:
                            </div>
                            <div class="kabkot-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 10px;">
                                @foreach($prov['kabkot'] as $kk)
                                    <a href="{{ route('wilayah.kabkot', [$prov['slug'], $kk['slug']]) }}" 
                                       class="city-item-btn"
                                       data-city-name="{{ strtolower($kk['name']) }}"
                                       style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 14px; font-size: 0.82rem; font-weight: 600; color: #1e293b; text-decoration: none; display: flex; align-items: center; justify-content: space-between; gap: 8px; transition: all 0.2s ease; box-shadow: 0 1px 2px rgba(0,0,0,0.02);">
                                        <span class="city-label" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">
                                            <i class="bi bi-geo-alt" style="color: #f59e0b; margin-right: 4px;"></i>{{ $kk['name'] }}
                                        </span>
                                        <i class="bi bi-arrow-right" style="font-size: 0.72rem; color: #94a3b8;"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- INTERACTIVE SCRIPT FOR SEARCH & ISLAND FILTER -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('kabkotSearchInput');
            const searchResultCount = document.getElementById('searchResultCount');
            const provinceBoxes = document.querySelectorAll('.province-region-box');
            const islandButtons = document.querySelectorAll('.island-filter-btn');
            const btnExpandAll = document.getElementById('btnExpandAll');
            const btnCollapseAll = document.getElementById('btnCollapseAll');

            let currentIsland = 'all';

            // Toggle single province accordion
            document.querySelectorAll('.province-header-bar').forEach(header => {
                header.addEventListener('click', function(e) {
                    const box = this.closest('.province-region-box');
                    const content = box.querySelector('.kabkot-collapsible-content');
                    const icon = box.querySelector('.toggle-icon');
                    const isVisible = content.style.display === 'block';

                    if (isVisible) {
                        content.style.display = 'none';
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        content.style.display = 'block';
                        icon.style.transform = 'rotate(180deg)';
                    }
                });
            });

            // Expand all
            btnExpandAll.addEventListener('click', function() {
                provinceBoxes.forEach(box => {
                    if (box.style.display !== 'none') {
                        const content = box.querySelector('.kabkot-collapsible-content');
                        const icon = box.querySelector('.toggle-icon');
                        content.style.display = 'block';
                        icon.style.transform = 'rotate(180deg)';
                    }
                });
            });

            // Collapse all
            btnCollapseAll.addEventListener('click', function() {
                provinceBoxes.forEach(box => {
                    const content = box.querySelector('.kabkot-collapsible-content');
                    const icon = box.querySelector('.toggle-icon');
                    content.style.display = 'none';
                    icon.style.transform = 'rotate(0deg)';
                });
            });

            // Island tab filter
            islandButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    islandButtons.forEach(b => {
                        b.classList.remove('active');
                        b.style.background = '#f1f5f9';
                        b.style.color = '#475569';
                        b.style.border = '1px solid #e2e8f0';
                    });
                    this.classList.add('active');
                    this.style.background = '#0f172a';
                    this.style.color = '#ffffff';
                    this.style.border = 'none';

                    currentIsland = this.getAttribute('data-island');
                    applyFilter();
                });
            });

            // Search filter
            searchInput.addEventListener('input', function() {
                applyFilter();
            });

            function applyFilter() {
                const query = searchInput.value.toLowerCase().trim();
                let matchedCities = 0;
                let visibleProvinces = 0;

                provinceBoxes.forEach(box => {
                    const boxIsland = box.getAttribute('data-island');
                    const boxProvince = box.getAttribute('data-province');
                    const content = box.querySelector('.kabkot-collapsible-content');
                    const icon = box.querySelector('.toggle-icon');
                    const cityBtns = box.querySelectorAll('.city-item-btn');

                    // Check island match
                    const islandMatch = (currentIsland === 'all' || boxIsland === currentIsland);

                    if (!islandMatch) {
                        box.style.display = 'none';
                        return;
                    }

                    if (query === '') {
                        // Reset search
                        box.style.display = 'block';
                        visibleProvinces++;
                        cityBtns.forEach(btn => {
                            btn.style.display = 'flex';
                            btn.style.background = '#ffffff';
                            btn.style.borderColor = '#e2e8f0';
                        });
                        searchResultCount.style.display = 'none';
                    } else {
                        // Searching query
                        const provMatch = boxProvince.includes(query);
                        let provHasMatchingCity = false;

                        cityBtns.forEach(btn => {
                            const cityName = btn.getAttribute('data-city-name');
                            if (cityName.includes(query) || provMatch) {
                                btn.style.display = 'flex';
                                if (cityName.includes(query)) {
                                    btn.style.background = '#fef3c7';
                                    btn.style.borderColor = '#f59e0b';
                                    matchedCities++;
                                } else {
                                    btn.style.background = '#ffffff';
                                    btn.style.borderColor = '#e2e8f0';
                                }
                                provHasMatchingCity = true;
                            } else {
                                btn.style.display = 'none';
                            }
                        });

                        if (provMatch || provHasMatchingCity) {
                            box.style.display = 'block';
                            visibleProvinces++;
                            content.style.display = 'block';
                            icon.style.transform = 'rotate(180deg)';
                        } else {
                            box.style.display = 'none';
                        }
                    }
                });

                if (query !== '') {
                    searchResultCount.style.display = 'inline';
                    searchResultCount.textContent = `${matchedCities} Kota/Kabupaten ditemukan`;
                }
            }
        });
    </script>

    <!-- HOVER EFFECTS ON CITY BUTTONS -->
    <style>
        .city-item-btn:hover {
            border-color: #f59e0b !important;
            background: #fffbeb !important;
            color: #92400e !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.06) !important;
        }
        .province-header-bar:hover {
            background: #f8fafc !important;
        }
    </style>

@endsection
