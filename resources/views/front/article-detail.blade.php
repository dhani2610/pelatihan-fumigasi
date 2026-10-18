@extends('layouts.front')

@section('title', $article->title . ' | Panduan & Pelatihan Fumigasi')
@section('meta_description', Str::limit($article->excerpt, 160))

@section('content')

    <!-- HERO SECTION -->
    <section class="hero-section" style="padding-top: 40px; text-align: left;">
        <div class="container">
            <div class="breadcrumb-bar" style="margin-bottom: 20px;">
                <a href="{{ route('home') }}"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('articles') }}">Artikel</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 600;">{{ Str::limit($article->title, 40) }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <div class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-tag-fill"></i>
                    {{ $article->category }}
                </div>
                @if($article->region)
                    <div class="hero-badge" style="margin-bottom: 0; background: rgba(245, 158, 11, 0.15); border-color: #f59e0b; color: #fbbf24;">
                        <i class="bi bi-geo-alt-fill"></i>
                        {{ $article->region }}
                    </div>
                @endif
                <div class="hero-badge" style="margin-bottom: 0; background: rgba(16, 185, 129, 0.15); border-color: #10b981; color: #34d399;">
                    <i class="bi bi-patch-check-fill"></i>
                    Standar Barantin & ISPM 15
                </div>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.2rem; max-width: 950px; line-height: 1.3;">
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
                <span><i class="bi bi-file-text-fill" style="color: var(--primary-gold);"></i> Panduan Lengkap Standar Barantin</span>
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
                        
                        <!-- Highlight Excerpt Box -->
                        <div style="font-size: 1.05rem; font-weight: 600; color: #0f172a; background: #fffbeb; border-left: 4px solid var(--primary-gold); padding: 18px 22px; border-radius: 8px; margin-bottom: 24px; box-shadow: inset 0 0 0 1px rgba(245, 158, 11, 0.1);">
                            <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: #d97706; margin-bottom: 6px; font-weight: 800;">
                                <i class="bi bi-info-circle-fill"></i> Ringkasan Eksekutif
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
                                    Daftar Kecamatan Wilayah {{ $article->region ?? 'Terkait' }}
                                </h3>
                                <p style="font-size: 0.85rem; color: #64748b; margin: 0;">
                                    Cakupan operasional, bimbingan teknis fumigasi, dan sertifikasi peserta
                                </p>
                            </div>
                        </div>

                        <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 20px;">
                            Program pelatihan teknis dan sertifikasi fumigasi komoditas ekspor, pergudangan pangan, serta standar perlakuan karantina ISPM 15 & AFAS terbuka dan menjangkau seluruh pelaku usaha, eksportir, pengelola logistik, maupun personil teknis yang berlokasi di seluruh kecamatan dalam naungan <strong>{{ $article->region }}</strong>:
                        </p>

                        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 12px; margin-bottom: 20px;">
                            @foreach($kecamatanList as $kec)
                                <div style="display: flex; align-items: center; gap: 10px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 14px; transition: all 0.2s ease;">
                                    <span style="display: inline-flex; width: 24px; height: 24px; border-radius: 50%; background: #e2e8f0; color: #0f172a; align-items: center; justify-content: center; font-size: 0.72rem; font-weight: 700;">
                                        <i class="bi bi-check2"></i>
                                    </span>
                                    <span style="font-size: 0.88rem; font-weight: 600; color: #1e293b;">
                                        Kecamatan {{ $kec }}
                                    </span>
                                </div>
                            @endforeach
                        </div>

                        <div style="background: #eff6ff; border-left: 4px solid #3b82f6; padding: 14px 18px; border-radius: 6px; font-size: 0.85rem; color: #1e40af; line-height: 1.6;">
                            <i class="bi bi-shield-check"></i> <strong>Layanan Terpadu Seluruh Wilayah:</strong> Pendaftaran peserta, pengiriman modul pelatihan fisik, sertifikat kelulusan teregistrasi, hingga supervisi in-house training fumigasi difasilitasi untuk seluruh kecamatan di atas tanpa terkecuali.
                        </div>
                    </div>

                    <!-- 2. GOOGLE MAPS SECTION -->
                    <div id="peta-lokasi" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 32px; margin-top: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); scroll-margin-top: 90px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(59, 130, 246, 0.12); color: #2563eb; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                                <i class="bi bi-map-fill"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">
                                    Peta Lokasi & Wilayah {{ $article->region ?? 'Indonesia' }}
                                </h3>
                                <p style="font-size: 0.85rem; color: #64748b; margin: 0;">
                                    Visualisasi geografis sentra komoditas, pelabuhan, dan fasilitas pergudangan
                                </p>
                            </div>
                        </div>

                        <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 20px;">
                            Berikut peta navigasi interaktif untuk wilayah <strong>{{ $article->region }}</strong> guna mempermudah pemetaan lokasi gudang komoditas, depo kontainer, area pelabuhan ekspor, dan sentra perlakuan karantina fumigasi:
                        </p>

                        <div style="border-radius: 12px; overflow: hidden; border: 1px solid #cbd5e1; box-shadow: 0 4px 12px rgba(0,0,0,0.04); height: 380px; background: #e2e8f0; position: relative;">
                            <iframe 
                                src="https://maps.google.com/maps?q={{ urlencode($article->region ?? 'Indonesia') }}&t=&z=12&ie=UTF8&iwloc=&output=embed" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>

                        <div style="margin-top: 14px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px; font-size: 0.82rem; color: #64748b;">
                            <span><i class="bi bi-geo-alt"></i> Titik Fokus: <strong>{{ $article->region }}</strong></span>
                            <a href="https://maps.google.com/?q={{ urlencode($article->region ?? 'Indonesia') }}" target="_blank" style="color: #2563eb; font-weight: 600; text-decoration: underline;">
                                Buka di Google Maps <i class="bi bi-box-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- 3. ANSWER QUESTION (FAQ ACCORDION) SECTION -->
                    <div id="answer-question" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 32px; margin-top: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); scroll-margin-top: 90px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <div style="width: 42px; height: 42px; border-radius: 10px; background: rgba(16, 185, 129, 0.12); color: #059669; display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                                <i class="bi bi-question-circle-fill"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;">
                                    Answer Question: Tanya Jawab Pelatihan Fumigasi di {{ $article->region }}
                                </h3>
                                <p style="font-size: 0.85rem; color: #64748b; margin: 0;">
                                    Pertanyaan sering diajukan seputar sertifikasi, regulasi Barantin, dan prosedur teknis
                                </p>
                            </div>
                        </div>

                        <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 24px;">
                            Temukan jawaban komprehensif atas pertanyaan mendasar mengenai pelatihan fumigasi, keabsahan sertifikat, aspek keselamatan K3 gas beracun, serta tata cara pendaftaran:
                        </p>

                        <div class="faq-accordion-group" style="display: flex; flex-direction: column; gap: 14px;">
                            @foreach($articleFaqs as $index => $faq)
                                <div class="faq-item {{ $index === 0 ? 'active' : '' }}" style="border: 1px solid #e2e8f0; border-radius: 10px; overflow: hidden; background: #ffffff;">
                                    <div class="faq-question" style="padding: 18px 20px; font-weight: 700; font-size: 0.95rem; color: #0f172a; display: flex; justify-content: space-between; align-items: center; cursor: pointer; background: #f8fafc; transition: all 0.2s ease;">
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
                                Dapatkan informasi lengkap silabus, jadwal pelatihan terdekat untuk wilayah {{ $article->region }}, serta syarat penerbitan sertifikasi kompetensi melalui 4 nomor WhatsApp resmi berikut:
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
                                <a href="https://api.whatsapp.com/send?phone={{ $num['clean'] }}&text={{ urlencode('Halo Admin Pelatihan Fumigasi, saya ingin info pendaftaran wilayah ' . ($article->region ?? 'Indonesia')) }}" 
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

                    <!-- Programs Widget -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; margin-bottom: 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                        <h4 style="font-size: 1rem; font-weight: 800; color: #0f172a; margin-bottom: 16px;">
                            Program Pelatihan Terkait
                        </h4>
                        <div style="display: flex; flex-direction: column; gap: 10px;">
                            @foreach($programs as $p)
                                <a href="{{ route('program.detail', $p->slug) }}" style="display: block; padding: 12px 14px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 0.85rem; font-weight: 700; color: #1e293b; text-decoration: none; transition: all 0.2s ease;">
                                    <div style="display: flex; align-items: center; justify-content: space-between;">
                                        <span>{{ $p->title }}</span>
                                        <i class="bi bi-chevron-right" style="font-size: 0.75rem; color: #94a3b8;"></i>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Related Articles -->
                    @if($relatedArticles->count() > 0)
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                        <h4 style="font-size: 1rem; font-weight: 800; color: #0f172a; margin-bottom: 16px;">
                            Artikel Pelatihan Lainnya
                        </h4>
                        <div style="display: flex; flex-direction: column; gap: 14px;">
                            @foreach($relatedArticles as $rel)
                                <div style="padding-bottom: 12px; border-bottom: 1px solid #f1f5f9;">
                                    <a href="{{ route('article.detail', $rel->slug) }}" style="font-size: 0.86rem; font-weight: 700; color: #0f172a; line-height: 1.4; display: block; margin-bottom: 4px; text-decoration: none;">
                                        {{ $rel->title }}
                                    </a>
                                    <div style="font-size: 0.72rem; color: #94a3b8; display: flex; align-items: center; gap: 8px;">
                                        <span><i class="bi bi-geo-alt"></i> {{ $rel->region ?? 'Nasional' }}</span>
                                        <span>•</span>
                                        <span>{{ $rel->published_at ? $rel->published_at->format('d M Y') : '' }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

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
