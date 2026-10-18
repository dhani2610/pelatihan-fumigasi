@extends('layouts.front')

@section('title', $program->title . ' | Sertifikasi Pelatihan Fumigasi')
@section('meta_description', Str::limit($program->short_description, 160))

@section('content')

    <!-- HERO SECTION -->
    <section class="hero-section" style="padding-top: 40px; text-align: left;">
        <div class="container">
            <div class="breadcrumb-bar" style="margin-bottom: 20px;">
                <a href="{{ route('home') }}"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('home') }}#program">Program</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 600;">{{ $program->title }}</span>
            </div>

            <div class="hero-badge">
                <i class="bi bi-award-fill"></i>
                {{ $program->level_name }}
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.2rem;">
                {{ $program->title }}
            </h1>

            <p class="hero-desc" style="margin-left: 0;">
                {{ $program->short_description }}
            </p>

            <div class="hero-actions" style="justify-content: flex-start;">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-gold">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi & Daftar via WhatsApp
                </a>
                <a href="{{ route('contact') }}" class="btn-outline-light">
                    Kirim Permohonan Brosur
                </a>
            </div>
        </div>
    </section>

    <!-- CONTENT WRAPPER -->
    <section class="section-padding" style="padding-top: 50px;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
                
                <!-- Main Content -->
                <div>
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 32px; margin-bottom: 30px;">
                        <h2 style="font-size: 1.45rem; font-weight: 800; color: #0f172a; margin-bottom: 16px;">Deskripsi Program</h2>
                        <div style="font-size: 0.92rem; color: #475569; line-height: 1.8; margin-bottom: 24px;">
                            <p>{{ $program->full_description }}</p>
                        </div>

                        <h2 style="font-size: 1.45rem; font-weight: 800; color: #0f172a; margin-bottom: 16px; border-top: 1px solid #f1f5f9; padding-top: 24px;">
                            Silabus & Modul Pembelajaran
                        </h2>
                        <p style="font-size: 0.86rem; color: #64748b; margin-bottom: 18px;">
                            Materi terstruktur dirancang sesuai kompetensi SKKNI dan protokol Barantin:
                        </p>

                        <div style="display: flex; flex-direction: column; gap: 12px;">
                            @foreach($program->curriculum ?? [] as $index => $modul)
                                <div style="display: flex; align-items: flex-start; gap: 14px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                                    <span style="width: 28px; height: 28px; background: #0c192c; color: var(--primary-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 800; flex-shrink: 0;">
                                        {{ $index + 1 }}
                                    </span>
                                    <span style="font-size: 0.9rem; font-weight: 600; color: #1e293b; margin-top: 2px;">
                                        {{ $modul }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Target Peserta -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px;">
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 12px;">Sasaran Peserta</h3>
                        <p style="font-size: 0.88rem; color: #475569; line-height: 1.7;">
                            {{ $program->target_audience ?? 'Teknisi, supervisor, operator PCO, kepala pergudangan komoditas, eksportir, staf logistik pelabuhan, dan personel K3 industri.' }}
                        </p>
                    </div>
                </div>

                <!-- Sidebar Info -->
                <div>
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; position: sticky; top: 100px;">
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                            Ringkasan Pelatihan
                        </h3>

                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 18px; margin-bottom: 24px;">
                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-clock-fill" style="color: var(--primary-gold); font-size: 1.1rem; margin-top: 2px;"></i>
                                <div>
                                    <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Durasi</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a;">{{ $program->duration ?? '-' }}</div>
                                </div>
                            </li>

                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-laptop-fill" style="color: var(--primary-gold); font-size: 1.1rem; margin-top: 2px;"></i>
                                <div>
                                    <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Metode</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a;">{{ $program->method ?? '-' }}</div>
                                </div>
                            </li>

                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-patch-check-fill" style="color: var(--primary-gold); font-size: 1.1rem; margin-top: 2px;"></i>
                                <div>
                                    <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Sertifikasi</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a;">{{ $program->certification ?? '-' }}</div>
                                </div>
                            </li>

                            <li style="display: flex; align-items: flex-start; gap: 12px;">
                                <i class="bi bi-cash-stack" style="color: var(--primary-gold); font-size: 1.1rem; margin-top: 2px;"></i>
                                <div>
                                    <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; font-weight: 700;">Biaya Investasi</div>
                                    <div style="font-size: 0.88rem; font-weight: 700; color: #0f172a;">{{ $program->price_note ?? 'Konsultasikan ke Konsultan' }}</div>
                                </div>
                            </li>
                        </ul>

                        <a href="{{ $waLink }}" target="_blank" class="btn-card-wa" style="width: 100%; justify-content: center; background: var(--primary-gold); color: #0c192c; font-size: 0.9rem;">
                            <i class="bi bi-whatsapp"></i>
                            Konsultasi WhatsApp
                        </a>

                        <a href="{{ route('contact') }}" class="btn-outline-light" style="width: 100%; justify-content: center; background: #f8fafc; color: #0f172a; border-color: #cbd5e1; font-size: 0.85rem;">
                            Hubungi Tim Kami
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
