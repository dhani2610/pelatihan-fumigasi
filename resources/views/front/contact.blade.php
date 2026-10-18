@extends('layouts.front')

@section('title', 'Hubungi Kami | Konsultasi Pelatihan Fumigasi')
@section('meta_description', 'Hubungi tim konsultan pelatihan dan sertifikasi fumigasi untuk jadwal, proposal in-house training, dan persyaratan administrasi.')

@section('content')

    <!-- HERO SECTION -->
    <section class="hero-section" style="padding-top: 50px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-chat-dots-fill"></i>
                Layanan Bantuan & Konsultasi
            </div>

            <h1 class="hero-title">
                Hubungi Tim Konsultan <span class="text-highlight">Fumigasi</span>
            </h1>

            <p class="hero-desc">
                Konsultasikan kebutuhan pelatihan sertifikasi individu maupun in-house training perusahaan Anda dengan tim konsultan berpengalaman kami.
            </p>
        </div>
    </section>

    <!-- CONTACT WRAPPER -->
    <section class="section-padding" style="padding-top: 50px;">
        <div class="container">
            
            @if(session('success'))
                <div style="background: #ecfdf5; border: 1px solid #a7f3d0; border-radius: 10px; padding: 18px 24px; color: #065f46; font-size: 0.95rem; font-weight: 600; margin-bottom: 30px; display: flex; align-items: center; gap: 12px;">
                    <i class="bi bi-check-circle-fill" style="font-size: 1.3rem; color: #10b981;"></i>
                    {{ session('success') }}
                </div>
            @endif

            <div style="display: grid; grid-template-columns: 1fr 1.6fr; gap: 40px;">
                
                <!-- Contact Info Sidebar -->
                <div>
                    <div style="background: #0c192c; color: #ffffff; border-radius: 14px; padding: 36px 30px; position: relative; overflow: hidden;">
                        <h3 style="font-size: 1.4rem; font-weight: 800; margin-bottom: 12px;">Informasi Kontak</h3>
                        <p style="font-size: 0.86rem; color: #94a3b8; line-height: 1.6; margin-bottom: 30px;">
                            Hubungi saluran resmi kami untuk respons cepat setiap hari kerja (08.00 - 17.00 WIB).
                        </p>

                        <div style="display: flex; flex-direction: column; gap: 24px; margin-bottom: 36px;">
                            <div style="display: flex; align-items: flex-start; gap: 16px;">
                                <div style="width: 42px; height: 42px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: var(--primary-gold); font-size: 1.2rem; flex-shrink: 0;">
                                    <i class="bi bi-whatsapp"></i>
                                </div>
                                <div>
                                    <div style="font-size: 0.75rem; color: #64748b; text-transform: uppercase; font-weight: 700;">WhatsApp Konsultasi</div>
                                    <div style="font-size: 0.95rem; font-weight: 700; color: #ffffff;">+{{ \App\Models\Setting::get('whatsapp_number', '6281234567890') }}</div>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start; gap: 16px;">
                                <div style="width: 42px; height: 42px; background: rgba(2, 132, 199, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #38bdf8; font-size: 1.2rem; flex-shrink: 0;">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <div>
                                    <div style="font-size: 0.75rem; color: #64748b; text-transform: uppercase; font-weight: 700;">Email Resmi</div>
                                    <div style="font-size: 0.95rem; font-weight: 700; color: #ffffff;">{{ \App\Models\Setting::get('contact_email', 'info@pelatihanfumigasi.id') }}</div>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start; gap: 16px;">
                                <div style="width: 42px; height: 42px; background: rgba(16, 185, 129, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #34d399; font-size: 1.2rem; flex-shrink: 0;">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div>
                                    <div style="font-size: 0.75rem; color: #64748b; text-transform: uppercase; font-weight: 700;">Alamat Training Center</div>
                                    <div style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.5;">{{ \App\Models\Setting::get('contact_address', 'Pusat Pelatihan Karantina & K3 Nasional, Kawasan Logistik, Jakarta') }}</div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ $waLink }}" target="_blank" class="btn-primary-gold" style="width: 100%; justify-content: center; font-size: 0.9rem;">
                            <i class="bi bi-whatsapp"></i> Chat WhatsApp Sekarang
                        </a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 36px;">
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Kirim Formulir Permohonan</h3>
                    <p style="font-size: 0.86rem; color: #64748b; margin-bottom: 24px;">
                        Silakan lengkapi formulir di bawah ini. Tim kami akan segera menghubungi Anda melalui nomor WhatsApp atau Email.
                    </p>

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 18px;">
                            <div>
                                <label style="display: block; font-size: 0.82rem; font-weight: 700; color: #334155; margin-bottom: 6px;">Nama Lengkap *</label>
                                <input type="text" name="name" required placeholder="Contoh: Budi Santoso" style="width: 100%; padding: 11px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem;" value="{{ old('name') }}">
                                @error('name') <span style="font-size: 0.75rem; color: #ef4444;">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label style="display: block; font-size: 0.82rem; font-weight: 700; color: #334155; margin-bottom: 6px;">Nomor WhatsApp / HP *</label>
                                <input type="text" name="phone" required placeholder="Contoh: 081234567890" style="width: 100%; padding: 11px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem;" value="{{ old('phone') }}">
                                @error('phone') <span style="font-size: 0.75rem; color: #ef4444;">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 18px;">
                            <div>
                                <label style="display: block; font-size: 0.82rem; font-weight: 700; color: #334155; margin-bottom: 6px;">Email *</label>
                                <input type="email" name="email" required placeholder="nama@email.com" style="width: 100%; padding: 11px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem;" value="{{ old('email') }}">
                                @error('email') <span style="font-size: 0.75rem; color: #ef4444;">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label style="display: block; font-size: 0.82rem; font-weight: 700; color: #334155; margin-bottom: 6px;">Nama Perusahaan / Instansi</label>
                                <input type="text" name="company" placeholder="Contoh: PT Agro Sejahtera" style="width: 100%; padding: 11px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem;" value="{{ old('company') }}">
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 18px;">
                            <div>
                                <label style="display: block; font-size: 0.82rem; font-weight: 700; color: #334155; margin-bottom: 6px;">Pilihan Program</label>
                                <select name="program_id" style="width: 100%; padding: 11px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem; background: #fff;">
                                    <option value="">-- Pilih Program Pelatihan --</option>
                                    @foreach($programs as $p)
                                        <option value="{{ $p->id }}" {{ old('program_id') == $p->id ? 'selected' : '' }}>{{ $p->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label style="display: block; font-size: 0.82rem; font-weight: 700; color: #334155; margin-bottom: 6px;">Wilayah / Provinsi</label>
                                <select name="region" style="width: 100%; padding: 11px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem; background: #fff;">
                                    <option value="">-- Pilih Wilayah --</option>
                                    @foreach($provinces as $prov)
                                        <option value="{{ $prov['name'] }}" {{ old('region') == $prov['name'] ? 'selected' : '' }}>{{ $prov['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div style="margin-bottom: 24px;">
                            <label style="display: block; font-size: 0.82rem; font-weight: 700; color: #334155; margin-bottom: 6px;">Pesan / Pertanyaan / Kebutuhan Pelatihan *</label>
                            <textarea name="message" required rows="4" placeholder="Tuliskan pertanyaan Anda mengenai jadwal, jumlah peserta, atau permohonan in-house training..." style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem; resize: vertical;">{{ old('message') }}</textarea>
                            @error('message') <span style="font-size: 0.75rem; color: #ef4444;">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn-primary-gold" style="width: 100%; justify-content: center; font-size: 0.95rem; cursor: pointer; border: none;">
                            <i class="bi bi-send-fill"></i> Kirim Pesan & Permohonan Konsultasi
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection
