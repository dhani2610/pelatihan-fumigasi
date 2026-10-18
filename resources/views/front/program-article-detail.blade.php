@extends('layouts.front')

@section('title', $article->title . ' | Panduan Resmi Standar Barantin & ISPM 15')
@section('meta_description', Str::limit($article->excerpt, 160))

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
                    <span>/</span>
                    <a href="{{ route('wilayah.kabkot.program', [$province['slug'], $kabkotSlug, $program['slug']]) }}">{{ $program['level_code'] }}</a>
                @else
                    <span>/</span>
                    <a href="{{ route('wilayah.provinsi.program', [$province['slug'], $program['slug']]) }}">{{ $program['level_code'] }}</a>
                @endif
                <span>/</span>
                <span style="color: #ffffff; font-weight: 600;">{{ Str::limit($article->title, 40) }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <div class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-tag-fill"></i>
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
                {{ $article->title }}
            </h1>

            <div style="display: flex; align-items: center; gap: 16px; font-size: 0.85rem; color: #94a3b8; flex-wrap: wrap; margin-top: 15px;">
                <span><i class="bi bi-person-fill" style="color: var(--primary-gold);"></i> {{ $article->author ?? 'Tim Instruktur Karantina' }}</span>
                <span>•</span>
                <span><i class="bi bi-calendar3" style="color: var(--primary-gold);"></i> {{ $article->published_at ? $article->published_at->format('d F Y') : 'Terbaru' }}</span>
                <span>•</span>
                <span><i class="bi bi-clock-history" style="color: var(--primary-gold);"></i> {{ $article->reading_time }}</span>
                <span>•</span>
                <span><i class="bi bi-eye-fill" style="color: var(--primary-gold);"></i> {{ $article->views }} x dibaca</span>
                <span>•</span>
                <span style="color: #34d399; font-weight: 700;"><i class="bi bi-file-text-fill"></i> Panduan Lengkap Standar Barantin</span>
            </div>
        </div>
    </section>

    <!-- ARTICLE BODY & SECTIONS -->
    <section class="section-padding" style="padding-top: 45px; background: #f8fafc;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 2.2fr 1fr; gap: 36px; align-items: start;">
                
                <!-- Main Article Text Column -->
                <div>
                    <!-- Main Text Box -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 36px; line-height: 1.85; font-size: 0.98rem; color: #334155; box-shadow: 0 4px 20px rgba(0,0,0,0.02);">
                        
                        <!-- Back to Program Banner -->
                        @php
                            $programUrl = isset($kabkotSlug)
                                ? route('wilayah.kabkot.program', [$province['slug'], $kabkotSlug, $program['slug']])
                                : route('wilayah.provinsi.program', [$province['slug'], $program['slug']]);
                        @endphp
                        <div style="background: #f0fdfa; border: 1px solid #99f6e4; border-radius: 8px; padding: 12px 18px; margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
                            <div style="font-size: 0.85rem; color: #115e59;">
                                <i class="bi bi-info-circle-fill" style="color: #0d9488;"></i> Bagian dari modul resmi: <strong>{{ $program['title'] }} — {{ $regionName }}</strong>
                            </div>
                            <a href="{{ $programUrl }}" style="font-size: 0.82rem; font-weight: 700; color: #0f766e; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                                <i class="bi bi-arrow-left"></i> Kembali ke Detail Program & 10 Artikel
                            </a>
                        </div>

                        <!-- Highlight Excerpt Box -->
                        <div style="font-size: 1.05rem; font-weight: 600; color: #0f172a; background: #fffbeb; border-left: 4px solid var(--primary-gold); padding: 18px 22px; border-radius: 8px; margin-bottom: 24px; box-shadow: inset 0 0 0 1px rgba(245, 158, 11, 0.1);">
                            <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: #d97706; margin-bottom: 6px; font-weight: 800;">
                                <i class="bi bi-info-circle-fill"></i> Ringkasan Eksekutif Modul
                            </div>
                            {{ $article->excerpt }}
                        </div>

                        <!-- Quick Navigation Bar -->
                        <div style="display: flex; gap: 8px; flex-wrap: wrap; align-items: center; margin-bottom: 30px; padding: 14px 18px; background: #f1f5f9; border-radius: 10px; border: 1px solid #e2e8f0;">
                            <span style="font-size: 0.8rem; font-weight: 800; color: #334155; display: flex; align-items: center; gap: 6px;">
                                <i class="bi bi-compass-fill" style="color: var(--primary-gold);"></i> Navigasi Cepat:
                            </span>
                            <a href="#daftar-kecamatan" style="font-size: 0.78rem; font-weight: 700; color: #0f172a; background: #ffffff; padding: 6px 12px; border-radius: 6px; border: 1px solid #cbd5e1; text-decoration: none; display: inline-flex; align-items: center; gap: 5px;">
                                <i class="bi bi-geo-alt-fill" style="color: #f59e0b;"></i> Kecamatan ({{ count($kecamatanList) }})
                            </a>
                            <a href="#peta-lokasi" style="font-size: 0.78rem; font-weight: 700; color: #0f172a; background: #ffffff; padding: 6px 12px; border-radius: 6px; border: 1px solid #cbd5e1; text-decoration: none; display: inline-flex; align-items: center; gap: 5px;">
                                <i class="bi bi-map-fill" style="color: #3b82f6;"></i> Peta Lokasi
                            </a>
                            <a href="#answer-question" style="font-size: 0.78rem; font-weight: 700; color: #0f172a; background: #ffffff; padding: 6px 12px; border-radius: 6px; border: 1px solid #cbd5e1; text-decoration: none; display: inline-flex; align-items: center; gap: 5px;">
                                <i class="bi bi-question-circle-fill" style="color: #10b981;"></i> Answer Question (FAQ)
                            </a>
                            <a href="#kontak-whatsapp" style="font-size: 0.78rem; font-weight: 800; color: #065f46; background: #d1fae5; padding: 6px 12px; border-radius: 6px; border: 1px solid #a7f3d0; text-decoration: none; display: inline-flex; align-items: center; gap: 5px;">
                                <i class="bi bi-whatsapp"></i> 4 Nomor WA
                            </a>
                        </div>

                        <!-- Full Article Content -->
                        <div class="article-rich-text" style="margin-bottom: 30px;">
                            {!! nl2br(e($article->content)) !!}
                        </div>

                    </div>

                    <!-- 1. KECAMATAN SECTION -->
                    <div id="daftar-kecamatan" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 32px; margin-top: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); scroll-margin-top: 90px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(245, 158, 11, 0.12); color: var(--primary-gold); display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">
                                    Daftar Kecamatan Wilayah {{ $regionName }}
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

                    <!-- 2. GOOGLE MAPS SECTION -->
                    <div id="peta-lokasi" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 32px; margin-top: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); scroll-margin-top: 90px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(59, 130, 246, 0.12); color: #3b82f6; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                                <i class="bi bi-map-fill"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">
                                    Peta Lokasi Wilayah {{ $regionName }}
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

                    <!-- 3. ANSWER QUESTION (FAQ ACCORDION) -->
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
                                    Pertanyaan paling sering diajukan seputar pelatihan dan sertifikasi {{ $article->title }}
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

                    <!-- 4. OFFICIAL WHATSAPP CONSULTATION CARD (4 NUMBERS) -->
                    <div id="kontak-whatsapp" style="background: linear-gradient(135deg, #0c192c 0%, #1e293b 100%); border-radius: 14px; padding: 36px; margin-top: 30px; color: #ffffff; box-shadow: 0 10px 30px rgba(0,0,0,0.15); border: 1px solid rgba(245, 158, 11, 0.3); scroll-margin-top: 90px;">
                        <div style="text-align: center; max-width: 650px; margin: 0 auto 30px;">
                            <span style="display: inline-block; background: rgba(245, 158, 11, 0.2); color: #fbbf24; border: 1px solid rgba(245, 158, 11, 0.4); font-size: 0.75rem; font-weight: 700; padding: 4px 14px; border-radius: 20px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">
                                <i class="bi bi-telephone-inbound-fill"></i> Narahubung & Konsultasi Resmi
                            </span>
                            <h3 style="font-size: 1.5rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
                                Hubungi Tim Konsultan Pelatihan Fumigasi
                            </h3>
                            <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.6; margin: 0;">
                                Dapatkan informasi lengkap silabus, jadwal pelatihan terdekat untuk wilayah {{ $regionName }}, serta syarat penerbitan sertifikasi kompetensi melalui 4 nomor WhatsApp resmi berikut:
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
                                    <a href="https://api.whatsapp.com/send?phone={{ $num['clean'] }}&text={{ urlencode('Halo Admin Pelatihan Fumigasi, saya ingin konsultasi pendaftaran pelatihan untuk ' . $article->title) }}" 
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
                    <!-- 4 WhatsApp Numbers Widget (Sticky / Prominent) -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; margin-bottom: 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                        <h4 style="font-size: 1rem; font-weight: 800; color: #0f172a; margin-bottom: 6px; display: flex; align-items: center; gap: 8px;">
                            <i class="bi bi-whatsapp" style="color: #25D366; font-size: 1.2rem;"></i> Hotline WhatsApp Resmi
                        </h4>
                        <p style="font-size: 0.78rem; color: #64748b; margin-bottom: 16px; line-height: 1.4;">
                            Klik salah satu nomor untuk berkonsultasi langsung via chat WhatsApp:
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 10px;">
                            @foreach($waNumbers as $num)
                                <a href="https://api.whatsapp.com/send?phone={{ $num['clean'] }}&text={{ urlencode('Halo Admin Pelatihan Fumigasi, saya ingin info pendaftaran wilayah ' . $regionName) }}" 
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

                    <!-- 10 Modules List of This Program -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; margin-bottom: 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                        <h4 style="font-size: 1rem; font-weight: 800; color: #0f172a; margin-bottom: 6px;">
                            10 Modul Artikel Program Ini
                        </h4>
                        <p style="font-size: 0.78rem; color: #64748b; margin-bottom: 16px; line-height: 1.4;">
                            Daftar seluruh 10 modul artikel spesialisasi untuk {{ $program['level_code'] }}:
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            @foreach($allArticles as $itemArt)
                                @php
                                    $linkArt = isset($kabkotSlug)
                                        ? route('wilayah.kabkot.program.article', [$province['slug'], $kabkotSlug, $program['slug'], $itemArt->slug])
                                        : route('wilayah.provinsi.program.article', [$province['slug'], $program['slug'], $itemArt->slug]);
                                    $isActive = ($itemArt->slug === $article->slug);
                                @endphp
                                <a href="{{ $linkArt }}" style="display: block; padding: 10px 12px; background: {{ $isActive ? '#f0fdfa' : '#f8fafc' }}; border: 1px solid {{ $isActive ? '#0f766e' : '#e2e8f0' }}; border-radius: 8px; font-size: 0.82rem; font-weight: 700; color: {{ $isActive ? '#0f766e' : '#1e293b' }}; text-decoration: none; transition: all 0.2s ease;">
                                    <div style="display: flex; align-items: center; justify-content: space-between; gap: 8px;">
                                        <span style="line-height: 1.4;">
                                            <span style="color: {{ $isActive ? '#0f766e' : '#94a3b8' }}; font-weight: 800; margin-right: 4px;">#{{ $itemArt->module_number }}.</span>
                                            {{ $itemArt->topic_title }}
                                        </span>
                                        @if($isActive)
                                            <i class="bi bi-check-circle-fill" style="color: #0f766e; flex-shrink: 0;"></i>
                                        @else
                                            <i class="bi bi-chevron-right" style="font-size: 0.72rem; color: #94a3b8; flex-shrink: 0;"></i>
                                        @endif
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Program Detail Info Card -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                        <h4 style="font-size: 0.95rem; font-weight: 800; color: #0f172a; margin-bottom: 12px;">
                            Tentang {{ $program['level_code'] }}
                        </h4>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.6; margin-bottom: 16px;">
                            {{ Str::limit($program['short_description'], 140) }}
                        </p>
                        <a href="{{ $programUrl }}" style="display: block; text-align: center; background: #0f172a; color: #ffffff; padding: 10px 14px; border-radius: 8px; font-weight: 700; font-size: 0.84rem; text-decoration: none;">
                            Lihat Silabus Program Lengkap
                        </a>
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
