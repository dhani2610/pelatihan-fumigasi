@extends('layouts.front')

@section('title', $program['title'] . ' di ' . $regionName . ' | 10 Program & Artikel Pelatihan')
@section('meta_description', 'Informasi silabus, kurikulum, dan 10 artikel panduan lengkap ' . $program['title'] . ' di wilayah ' . $regionName . '. Pelatihan berstandar Badan Karantina Indonesia, FAO ISPM 15, dan AFAS.')

@section('content')

    <!-- HERO SECTION -->
    <section class="hero-section" style="padding-top: 40px; text-align: left;">
        <div class="container">
            <div class="breadcrumb-bar" style="margin-bottom: 20px;">
                <a href="{{ route('home') }}"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('wilayah.provinsi', $province['slug']) }}">Provinsi {{ $province['name'] }}</a>
                @if(isset($kabkotSlug) && isset($kabkotName))
                    <span>/</span>
                    <a href="{{ route('wilayah.kabkot', [$province['slug'], $kabkotSlug]) }}">{{ $kabkotName }}</a>
                @endif
                <span>/</span>
                <span style="color: #ffffff; font-weight: 600;">{{ Str::limit($program['title'], 35) }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <div class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-award-fill"></i>
                    {{ $program['level_name'] }}
                </div>
                <div class="hero-badge" style="margin-bottom: 0; background: rgba(245, 158, 11, 0.15); border-color: #f59e0b; color: #fbbf24;">
                    <i class="bi bi-geo-alt-fill"></i>
                    {{ $regionName }}
                </div>
                <div class="hero-badge" style="margin-bottom: 0; background: rgba(16, 185, 129, 0.15); border-color: #10b981; color: #34d399;">
                    <i class="bi bi-patch-check-fill"></i>
                    Standar Barantin & ISPM 15
                </div>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.2rem; max-width: 980px; line-height: 1.3;">
                {{ $program['title'] }} — {{ $regionName }}
            </h1>

            <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 860px; line-height: 1.7; margin-bottom: 24px;">
                Program pelatihan dan pembinaan teknis komprehensif untuk wilayah {{ $regionName }}. Dilengkapi 10 artikel kurikulum spesialisasi untuk setiap modul keahlian.
            </p>

            <div style="display: flex; align-items: center; gap: 16px; font-size: 0.85rem; color: #94a3b8; flex-wrap: wrap; margin-bottom: 25px;">
                <span><i class="bi bi-clock-history" style="color: var(--primary-gold);"></i> Durasi: {{ $program['duration'] }}</span>
                <span>•</span>
                <span><i class="bi bi-mortarboard-fill" style="color: var(--primary-gold);"></i> {{ $program['certification'] }}</span>
                <span>•</span>
                <span><i class="bi bi-journal-richtext" style="color: var(--primary-gold);"></i> 10 Artikel Modul Terbuka (Panduan Lengkap)</span>
            </div>

            <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin, saya ingin konsultasi pendaftaran ' . $program['title'] . ' di wilayah ' . $regionName . '. Mohon informasi jadwal, silabus, dan biaya.') }}" target="_blank" class="btn btn-wa-pulse" style="background: #22c55e; color: #ffffff; padding: 12px 24px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 15px rgba(34,197,94,0.35);">
                    <i class="bi bi-whatsapp"></i> Konsultasi Pendaftaran (081399810272)
                </a>
                <a href="#daftar-artikel-program" class="btn btn-primary" style="padding: 12px 24px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="bi bi-grid-3x3-gap-fill"></i> Lihat 10 Artikel Program
                </a>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="section-padding" style="padding-top: 45px; background: #f8fafc;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 2.2fr 1fr; gap: 36px; align-items: start;">
                
                <!-- Main Column -->
                <div>
                    
                    <!-- 1. DETAIL PROGRAM CARD -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 36px; margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.02);">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                            <div>
                                <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; color: var(--primary-gold); font-weight: 800;">
                                    Silabus & Spesifikasi Program Layanan
                                </span>
                                <h2 style="font-size: 1.45rem; font-weight: 800; color: #0f172a; margin: 4px 0 0;">
                                    Ikhtisar: {{ $program['level_code'] }} ({{ $regionName }})
                                </h2>
                            </div>
                            <span style="background: #f1f5f9; color: #475569; padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700;">
                                <i class="bi bi-check2-circle" style="color: #10b981;"></i> Status: Pendaftaran Terbuka
                            </span>
                        </div>

                        <p style="font-size: 0.96rem; color: #334155; line-height: 1.8; margin-bottom: 24px;">
                            {{ $program['full_description'] }} Layanan pelatihan ini diselenggarakan dan dikoordinasikan secara terpadu untuk kawasan <strong>{{ $regionName }}</strong> guna mendukung kepatuhan karantina ekspor impor dan perlindungan komoditas industri.
                        </p>

                        <!-- Info 4-grid -->
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px; margin-bottom: 30px;">
                            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 16px;">
                                <div style="font-size: 0.72rem; color: #64748b; text-transform: uppercase; font-weight: 700; margin-bottom: 4px;">
                                    <i class="bi bi-people-fill" style="color: var(--primary-gold);"></i> Sasaran Peserta
                                </div>
                                <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a; line-height: 1.4;">
                                    {{ $program['target_audience'] }}
                                </div>
                            </div>
                            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 16px;">
                                <div style="font-size: 0.72rem; color: #64748b; text-transform: uppercase; font-weight: 700; margin-bottom: 4px;">
                                    <i class="bi bi-hourglass-split" style="color: var(--primary-gold);"></i> Durasi & Bobot
                                </div>
                                <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a; line-height: 1.4;">
                                    {{ $program['duration'] }}
                                </div>
                            </div>
                            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 16px;">
                                <div style="font-size: 0.72rem; color: #64748b; text-transform: uppercase; font-weight: 700; margin-bottom: 4px;">
                                    <i class="bi bi-laptop" style="color: var(--primary-gold);"></i> Metode Pelaksanaan
                                </div>
                                <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a; line-height: 1.4;">
                                    {{ $program['method'] }}
                                </div>
                            </div>
                            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 16px;">
                                <div style="font-size: 0.72rem; color: #64748b; text-transform: uppercase; font-weight: 700; margin-bottom: 4px;">
                                    <i class="bi bi-shield-check" style="color: var(--primary-gold);"></i> Sertifikat Kelulusan
                                </div>
                                <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a; line-height: 1.4;">
                                    {{ $program['certification'] }}
                                </div>
                            </div>
                        </div>

                        <!-- Kurikulum Pembelajaran -->
                        <div style="background: #f1f5f9; border-radius: 12px; padding: 24px; border: 1px solid #e2e8f0;">
                            <h3 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 14px; display: flex; align-items: center; gap: 8px;">
                                <i class="bi bi-journal-check" style="color: #0f766e;"></i> Kurikulum Pokok & Materi Kompetensi
                            </h3>
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 10px;">
                                @foreach($program['curriculum'] as $curr)
                                    <div style="display: flex; align-items: flex-start; gap: 8px; font-size: 0.88rem; color: #334155; line-height: 1.5;">
                                        <i class="bi bi-check-circle-fill" style="color: #10b981; font-size: 1rem; margin-top: 2px;"></i>
                                        <span>{{ $curr }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <!-- 2. 10 CARDS ARTIKEL PROGRAM SECTION -->
                    <div id="daftar-artikel-program" style="margin-bottom: 30px; scroll-margin-top: 90px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 12px;">
                            <div>
                                <span class="section-badge" style="margin-bottom: 6px;">
                                    <i class="bi bi-collection-play-fill"></i> 10 Artikel Modul Spesialisasi
                                </span>
                                <h2 style="font-size: 1.5rem; font-weight: 800; color: #0f172a; margin: 0;">
                                    Daftar 10 Artikel Terkait Program {{ $program['level_code'] }} di {{ $regionName }}
                                </h2>
                                <p style="font-size: 0.88rem; color: #64748b; margin: 4px 0 0;">
                                    Setiap kartu artikel berisi panduan komprehensif dengan topik teknis mendalam:
                                </p>
                            </div>
                            <span style="background: #e0f2fe; color: #0369a1; border: 1px solid #bae6fd; padding: 6px 14px; border-radius: 20px; font-size: 0.82rem; font-weight: 700;">
                                Total 10 Artikel Lengkap
                            </span>
                        </div>

                        <!-- Grid 10 Article Cards -->
                        <div style="display: flex; flex-direction: column; gap: 18px;">
                            @foreach($articles as $art)
                                @php
                                     $articleUrl = isset($kabkotSlug)
                                        ? route('wilayah.kabkot.program.article', [$province['slug'], $kabkotSlug, $program['slug'], $art->slug])
                                        : route('wilayah.provinsi.program.article', [$province['slug'], $program['slug'], $art->slug]);
                                @endphp
                                <div class="program-article-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px 28px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); transition: all 0.25s ease; border-left: 4px solid var(--primary-gold);">
                                    <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 16px; flex-wrap: wrap; margin-bottom: 12px;">
                                        <div style="display: flex; align-items: center; gap: 10px;">
                                            <span style="background: #0f172a; color: var(--primary-gold); font-size: 0.72rem; font-weight: 800; padding: 3px 10px; border-radius: 6px; letter-spacing: 0.5px; text-transform: uppercase;">
                                                Artikel #{{ sprintf('%02d', $art->module_number) }}
                                            </span>
                                            <span style="background: #f1f5f9; color: #475569; font-size: 0.75rem; font-weight: 600; padding: 3px 10px; border-radius: 6px;">
                                                <i class="bi bi-geo-alt-fill" style="color: #f59e0b;"></i> {{ $regionName }}
                                            </span>
                                            <span style="background: #ecfdf5; color: #059669; font-size: 0.75rem; font-weight: 700; padding: 3px 10px; border-radius: 6px;">
                                                <i class="bi bi-file-text-fill"></i> Modul Terpadu
                                            </span>
                                        </div>
                                        <div style="font-size: 0.78rem; color: #94a3b8; display: flex; align-items: center; gap: 6px;">
                                            <i class="bi bi-clock-history"></i> {{ $art->reading_time }}
                                        </div>
                                    </div>

                                    <h3 style="font-size: 1.18rem; font-weight: 800; color: #0f172a; line-height: 1.4; margin-bottom: 10px;">
                                        <a href="{{ $articleUrl }}" style="color: inherit; text-decoration: none; transition: color 0.2s ease;">
                                            {{ $art->title }}
                                        </a>
                                    </h3>

                                    <p style="font-size: 0.9rem; color: #475569; line-height: 1.65; margin-bottom: 18px;">
                                        {{ $art->excerpt }}
                                    </p>

                                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px dashed #e2e8f0; padding-top: 14px; flex-wrap: wrap; gap: 10px;">
                                        <div style="font-size: 0.8rem; color: #64748b;">
                                            <i class="bi bi-person-badge-fill" style="color: var(--primary-gold);"></i> Disusun oleh: <strong>{{ $art->author }}</strong>
                                        </div>
                                        <div style="display: flex; gap: 10px;">
                                            <a href="{{ $articleUrl }}" style="display: inline-flex; align-items: center; gap: 6px; background: #0f766e; color: #ffffff; padding: 8px 18px; border-radius: 6px; font-weight: 700; font-size: 0.84rem; text-decoration: none; box-shadow: 0 2px 6px rgba(15,118,110,0.25);">
                                                Buka Artikel Lengkap <i class="bi bi-arrow-right"></i>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin, saya ingin konsultasi materi ' . $art->title) }}" target="_blank" style="display: inline-flex; align-items: center; gap: 6px; background: #22c55e; color: #ffffff; padding: 8px 14px; border-radius: 6px; font-weight: 700; font-size: 0.84rem; text-decoration: none;">
                                                <i class="bi bi-whatsapp"></i> Tanya WA
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 3. KECAMATAN SECTION -->
                    <div id="daftar-kecamatan" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 32px; margin-top: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); scroll-margin-top: 90px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(245, 158, 11, 0.12); color: var(--primary-gold); display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">
                                    Daftar Kecamatan di Wilayah {{ $regionName }}
                                </h3>
                                <p style="font-size: 0.85rem; color: #64748b; margin: 0;">
                                    Cakupan operasional, bimbingan teknis fumigasi, dan sertifikasi peserta
                                </p>
                            </div>
                        </div>

                        <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 20px;">
                            Program pelatihan teknis dan sertifikasi fumigasi komoditas ekspor, pergudangan pangan, serta standar perlakuan karantina ISPM 15 & AFAS terbuka dan menjangkau seluruh pelaku usaha, eksportir, pengelola logistik, maupun personil teknis yang berlokasi di seluruh kecamatan dalam naungan <strong>{{ $regionName }}</strong>:
                        </p>

                        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 12px; margin-bottom: 20px;">
                            @foreach($kecamatanList as $kec)
                                <div style="display: flex; align-items: center; gap: 10px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 14px; transition: all 0.2s ease;">
                                    <i class="bi bi-check2-circle" style="color: #10b981; font-size: 1.1rem; flex-shrink: 0;"></i>
                                    <div>
                                        <div style="font-weight: 700; color: #1e293b; font-size: 0.88rem;">{{ $kec }}</div>
                                        <div style="font-size: 0.72rem; color: #64748b;">Wilayah Layanan Aktif</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 4. GOOGLE MAPS SECTION -->
                    <div id="peta-lokasi" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 32px; margin-top: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); scroll-margin-top: 90px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(59, 130, 246, 0.12); color: #3b82f6; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                                <i class="bi bi-map-fill"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">
                                    Peta Wilayah Layanan: {{ $regionName }}
                                </h3>
                                <p style="font-size: 0.85rem; color: #64748b; margin: 0;">
                                    Sentra koordinasi, depo logistik, dan titik temu pelatihan
                                </p>
                            </div>
                        </div>

                        <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 18px;">
                            Koordinasi teknis pelaksanaan program pelatihan fumigasi, verifikasi fasilitas, dan bimbingan lapangan berpusat pada zona strategis {{ $regionName }}. Fasilitas in-house training dapat dijadwalkan langsung di lokasi gudang atau pabrik Anda:
                        </p>

                        <div style="position: relative; width: 100%; height: 380px; border-radius: 10px; overflow: hidden; border: 1px solid #cbd5e1; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                            <iframe 
                                src="{{ $mapsUrl }}" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                    <!-- 5. ANSWER QUESTION (FAQ ACCORDION) -->
                    <div id="answer-question" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 32px; margin-top: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); scroll-margin-top: 90px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(16, 185, 129, 0.12); color: #10b981; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                                <i class="bi bi-question-circle-fill"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">
                                    Answer Question (Tanya Jawab Teknis {{ $regionName }})
                                </h3>
                                <p style="font-size: 0.85rem; color: #64748b; margin: 0;">
                                    Jawaban resmi atas pertanyaan umum mengenai pendaftaran dan materi {{ $program['title'] }}
                                </p>
                            </div>
                        </div>

                        <div class="faq-list" style="margin-top: 20px; display: flex; flex-direction: column; gap: 12px;">
                            @foreach($articleFaqs as $index => $faq)
                                <div class="faq-item {{ $index === 0 ? 'active' : '' }}" style="border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; transition: all 0.2s ease;">
                                    <div class="faq-question" style="padding: 16px 20px; background: #f8fafc; font-weight: 700; font-size: 0.94rem; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                                        <div style="display: flex; align-items: center; gap: 10px;">
                                            <span style="color: var(--primary-gold); font-weight: 800;">Q{{ $index + 1 }}.</span>
                                            <span>{{ $faq['q'] }}</span>
                                        </div>
                                        <i class="bi bi-chevron-down faq-chevron" style="color: #64748b; font-size: 0.85rem; transition: transform 0.2s ease;"></i>
                                    </div>
                                    <div class="faq-answer" style="padding: 18px 20px; font-size: 0.92rem; color: #334155; line-height: 1.75; border-top: 1px solid #e2e8f0; background: #ffffff;">
                                        <div style="margin-bottom: 6px; font-weight: 600; color: #059669; font-size: 0.82rem; text-transform: uppercase; letter-spacing: 0.5px;">
                                            <i class="bi bi-check-circle-fill"></i> Jawaban Resmi Ahli:
                                        </div>
                                        {{ $faq['a'] }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 6. OFFICIAL WHATSAPP 4 NUMBERS CARD -->
                    <div id="kontak-whatsapp" style="background: linear-gradient(135deg, #0c192c 0%, #1e293b 100%); border-radius: 14px; padding: 36px; margin-top: 30px; color: #ffffff; box-shadow: 0 10px 30px rgba(0,0,0,0.15); border: 1px solid rgba(245, 158, 11, 0.3); scroll-margin-top: 90px;">
                        <div style="text-align: center; max-width: 650px; margin: 0 auto 30px;">
                            <span style="display: inline-block; background: rgba(245, 158, 11, 0.2); color: #fbbf24; border: 1px solid rgba(245, 158, 11, 0.4); font-size: 0.75rem; font-weight: 700; padding: 4px 14px; border-radius: 20px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">
                                <i class="bi bi-telephone-inbound-fill"></i> Narahubung & Konsultasi Resmi
                            </span>
                            <h3 style="font-size: 1.5rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
                                Hubungi Tim Konsultan Pelatihan Fumigasi
                            </h3>
                            <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.6; margin: 0;">
                                Dapatkan informasi lengkap silabus, jadwal batch terdekat di {{ $regionName }}, serta syarat penerbitan sertifikasi kompetensi melalui 4 nomor WhatsApp resmi berikut:
                            </p>
                        </div>

                        <!-- 4 Numbers Grid -->
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px;">
                            @foreach($waNumbers as $num)
                                <div style="background: rgba(255, 255, 255, 0.05); border: 1px solid {{ $num['number'] === '081399810272' ? 'rgba(245, 158, 11, 0.8)' : 'rgba(255, 255, 255, 0.12)' }}; border-radius: 12px; padding: 20px; display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                                    @if($num['number'] === '081399810272')
                                        <div style="position: absolute; top: -10px; right: 14px; background: var(--primary-gold); color: #0c192c; font-size: 0.68rem; font-weight: 800; padding: 2px 10px; border-radius: 12px; text-transform: uppercase;">
                                            Hotline Utama
                                        </div>
                                    @endif
                                    <div>
                                        <div style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.5px; color: #94a3b8; font-weight: 600; margin-bottom: 4px;">
                                            {{ $num['title'] }}
                                        </div>
                                        <div style="font-size: 1.25rem; font-weight: 800; color: #ffffff; letter-spacing: 0.5px; margin-bottom: 6px;">
                                            <i class="bi {{ $num['icon'] }}" style="color: var(--primary-gold); margin-right: 6px;"></i>
                                            {{ $num['number'] }}
                                        </div>
                                        <p style="font-size: 0.8rem; color: #cbd5e1; margin-bottom: 16px; line-height: 1.4;">
                                            {{ $num['desc'] }}
                                        </p>
                                    </div>
                                    <a href="https://api.whatsapp.com/send?phone={{ $num['clean'] }}&text={{ urlencode('Halo Admin Pelatihan Fumigasi, saya ingin konsultasi pendaftaran pelatihan untuk ' . $program['title'] . ' di ' . $regionName) }}" 
                                       target="_blank" 
                                       style="display: flex; align-items: center; justify-content: center; gap: 8px; background: {{ $num['number'] === '081399810272' ? 'var(--primary-gold)' : '#25D366' }}; color: {{ $num['number'] === '081399810272' ? '#0c192c' : '#ffffff' }}; font-weight: 700; font-size: 0.85rem; padding: 10px 14px; border-radius: 8px; text-decoration: none; transition: transform 0.2s ease;">
                                        <i class="bi bi-whatsapp"></i> Chat WhatsApp ({{ $num['number'] }})
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <div style="margin-top: 24px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; font-size: 0.82rem; color: #94a3b8;">
                            <div>
                                <i class="bi bi-shield-lock-fill" style="color: #10b981;"></i> Layanan respon cepat tersedia setiap hari kerja: Senin - Sabtu (08.00 - 18.00 WIB)
                            </div>
                            <div style="color: #fbbf24; font-weight: 600;">
                                <i class="bi bi-chat-dots-fill"></i> Tombol Layang (Floating Button): <strong>081399810272</strong>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar Column -->
                <div>
                    <!-- 4 WhatsApp Numbers Widget (Sticky) -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; margin-bottom: 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                        <h4 style="font-size: 1rem; font-weight: 800; color: #0f172a; margin-bottom: 6px; display: flex; align-items: center; gap: 8px;">
                            <i class="bi bi-whatsapp" style="color: #25D366; font-size: 1.2rem;"></i> Hotline WhatsApp Resmi
                        </h4>
                        <p style="font-size: 0.78rem; color: #64748b; margin-bottom: 16px; line-height: 1.4;">
                            Klik salah satu nomor untuk berkonsultasi langsung via chat WhatsApp:
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 10px;">
                            @foreach($waNumbers as $num)
                                <a href="https://api.whatsapp.com/send?phone={{ $num['clean'] }}&text={{ urlencode('Halo Admin Pelatihan Fumigasi, saya ingin info pendaftaran ' . $program['title'] . ' di ' . $regionName) }}" 
                                   target="_blank" 
                                   style="display: flex; align-items: center; justify-content: space-between; padding: 10px 12px; background: {{ $num['number'] === '081399810272' ? '#fffbeb' : '#f8fafc' }}; border: 1px solid {{ $num['number'] === '081399810272' ? '#f59e0b' : '#e2e8f0' }}; border-radius: 8px; text-decoration: none; transition: all 0.2s ease;">
                                    <div>
                                        <div style="font-size: 0.72rem; color: #64748b; font-weight: 600;">{{ $num['title'] }}</div>
                                        <div style="font-size: 0.92rem; font-weight: 800; color: #0f172a;">{{ $num['number'] }}</div>
                                    </div>
                                    <span style="width: 32px; height: 32px; border-radius: 50%; background: #25D366; color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 0.95rem;">
                                        <i class="bi bi-whatsapp"></i>
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- 10 Programs List for This Region -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; margin-bottom: 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                        <h4 style="font-size: 1rem; font-weight: 800; color: #0f172a; margin-bottom: 6px;">
                            10 Program di {{ $regionName }}
                        </h4>
                        <p style="font-size: 0.78rem; color: #64748b; margin-bottom: 16px; line-height: 1.4;">
                            Jelajahi jenjang program pelatihan lainnya di wilayah ini:
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            @foreach($otherPrograms as $op)
                                @php
                                    $opUrl = isset($kabkotSlug)
                                        ? route('wilayah.kabkot.program', [$province['slug'], $kabkotSlug, $op->slug])
                                        : route('wilayah.provinsi.program', [$province['slug'], $op->slug]);
                                    $isCurrent = ($op->slug === $program['slug']);
                                @endphp
                                <a href="{{ $opUrl }}" style="display: block; padding: 10px 12px; background: {{ $isCurrent ? '#f0fdfa' : '#f8fafc' }}; border: 1px solid {{ $isCurrent ? '#0f766e' : '#e2e8f0' }}; border-radius: 8px; font-size: 0.82rem; font-weight: 700; color: {{ $isCurrent ? '#0f766e' : '#1e293b' }}; text-decoration: none; transition: all 0.2s ease;">
                                    <div style="display: flex; align-items: center; justify-content: space-between;">
                                        <span>
                                            @if($isCurrent)
                                                <i class="bi bi-check-circle-fill" style="margin-right: 4px;"></i>
                                            @endif
                                            {{ $op->level_code }}
                                        </span>
                                        <i class="bi bi-chevron-right" style="font-size: 0.72rem; color: {{ $isCurrent ? '#0f766e' : '#94a3b8' }};"></i>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Keunggulan Standar Barantin -->
                    <div style="background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%); border: 1px solid #bbf7d0; border-radius: 12px; padding: 22px;">
                        <h4 style="font-size: 0.95rem; font-weight: 800; color: #166534; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                            <i class="bi bi-patch-check-fill" style="color: #10b981;"></i> Jaminan Mutu Pelatihan
                        </h4>
                        <ul style="padding-left: 18px; margin: 0; font-size: 0.82rem; color: #1e3a5f; line-height: 1.6;">
                            <li style="margin-bottom: 6px;">Kurikulum resmi mengacu standar Karantina Tumbuhan & FAO ISPM 15</li>
                            <li style="margin-bottom: 6px;">Praktik hands-on SCBA, kalibrasi PID, dan alat uji kebocoran tekanan</li>
                            <li style="margin-bottom: 6px;">Instruktur berpengalaman sertifikasi Barantin & Dewan Ahli Biosekuriti</li>
                            <li>Bimbingan registrasi Tempat Tindakan Karantina (TTK)</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    document.querySelectorAll('.faq-question').forEach(header => {
        header.addEventListener('click', () => {
            const item = header.parentElement;
            item.classList.toggle('active');
        });
    });
</script>
@endpush
