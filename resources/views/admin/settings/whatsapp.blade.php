@extends('layouts.admin')

@section('title', 'Setting WhatsApp Konsultasi')
@section('header_title', 'Setting WhatsApp Tunggal (1 WA Untuk Semua)')

@section('content')

    <div style="max-width: 800px;">
        <div class="admin-card">
            <div class="admin-card-header">
                <div>
                    <h3 class="admin-card-title">Konfigurasi WhatsApp Tunggal</h3>
                    <p style="font-size: 0.8rem; color: #64748b; margin-top: 4px;">
                        1 Nomor WhatsApp ini digunakan secara terpusat untuk seluruh tombol konsultasi di website (beranda, tiap provinsi, tiap kabupaten/kota, dan halaman detail program).
                    </p>
                </div>
            </div>

            <form action="{{ route('admin.settings.whatsapp.update') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="form-label">Nomor WhatsApp Admin (Pusat Konsultasi) *</label>
                    <div style="position: relative;">
                        <span style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); font-weight: 700; color: #64748b; font-size: 0.9rem;">+</span>
                        <input type="text" name="whatsapp_number" id="whatsapp_number" class="form-control" style="padding-left: 30px;" value="{{ old('whatsapp_number', $whatsappNumber) }}" required placeholder="Contoh: 6281234567890 atau 081234567890">
                    </div>
                    <span class="form-hint">Dapat dimasukkan format 08... atau 628... (sistem akan otomatis menyesuaikan format internasional WhatsApp).</span>
                </div>

                <div class="form-group">
                    <label class="form-label">Template Pesan Otomatis Pengunjung *</label>
                    <textarea name="whatsapp_template" id="whatsapp_template" rows="4" class="form-control" required placeholder="Halo Admin Pelatihan Fumigasi, saya ingin informasi dan konsultasi pendaftaran pelatihan untuk wilayah {region}...">{{ old('whatsapp_template', $whatsappTemplate) }}</textarea>
                    
                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 14px; margin-top: 10px; font-size: 0.78rem; color: #475569;">
                        <strong>Tag Dinamis Tersedia:</strong>
                        <ul style="margin-left: 18px; margin-top: 4px; line-height: 1.6;">
                            <li><code>{region}</code> : Akan otomatis diganti dengan nama Provinsi atau Kab/Kota yang sedang dilihat pengunjung (misal: <em>Provinsi Aceh</em> atau <em>Kabupaten Simeulue</em>).</li>
                            <li><code>{program}</code> : Akan otomatis diganti dengan judul program yang dipilih pengunjung.</li>
                        </ul>
                    </div>
                </div>

                <!-- PREVIEW BOX -->
                <div class="form-group">
                    <label class="form-label">Pratinjau Pesan yang Diterima di WhatsApp Admin:</label>
                    <div style="background: #e5ddd5; border-radius: 12px; padding: 20px; max-width: 500px;">
                        <div style="background: #ffffff; border-radius: 8px 8px 8px 0; padding: 12px 16px; font-size: 0.86rem; color: #111827; box-shadow: 0 1px 2px rgba(0,0,0,0.1); position: relative;" id="livePreview">
                            Halo Admin Pelatihan Fumigasi, saya ingin informasi dan konsultasi pendaftaran pelatihan untuk wilayah <strong>Provinsi Aceh</strong>. Mohon info jadwal terbaru dan persyaratannya.
                            <div style="text-align: right; font-size: 0.65rem; color: #9ca3af; margin-top: 6px;">{{ date('H:i') }} <i class="bi bi-check2-all" style="color: #3b82f6;"></i></div>
                        </div>
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: 14px; margin-top: 30px; flex-wrap: wrap;">
                    <button type="submit" class="btn-admin-gold" style="font-size: 0.92rem; padding: 11px 22px;">
                        <i class="bi bi-save2"></i> Simpan Pengaturan WhatsApp
                    </button>

                    <a href="https://api.whatsapp.com/send?phone={{ $whatsappNumber }}&text={{ urlencode(str_replace(['{region}', '{program}'], ['Jakarta (Uji Coba)', 'Fumigasi Muda'], $whatsappTemplate)) }}" target="_blank" class="btn-admin-primary" style="background: #16a34a; font-size: 0.92rem; padding: 11px 20px;">
                        <i class="bi bi-whatsapp"></i> Uji Coba Chat Sekarang
                    </a>
                </div>

            </form>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    const templateInput = document.getElementById('whatsapp_template');
    const livePreview = document.getElementById('livePreview');

    if (templateInput && livePreview) {
        templateInput.addEventListener('input', () => {
            let val = templateInput.value;
            val = val.replace('{region}', '<strong>Provinsi Aceh</strong>');
            val = val.replace('{program}', '<strong>Training Fumigasi Muda</strong>');
            livePreview.innerHTML = val.replace(/\n/g, '<br>') + 
                '<div style="text-align: right; font-size: 0.65rem; color: #9ca3af; margin-top: 6px;">{{ date("H:i") }} <i class="bi bi-check2-all" style="color: #3b82f6;"></i></div>';
        });
    }
</script>
@endpush
