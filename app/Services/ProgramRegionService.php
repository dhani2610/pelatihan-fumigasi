<?php

namespace App\Services;

use App\Models\Program;
use App\Models\Article;
use Illuminate\Support\Str;

class ProgramRegionService
{
    /**
     * Master definition of 10 Programs
     */
    public static function getMasterPrograms(): array
    {
        return [
            [
                'title' => 'Training Fumigasi Supervisor (Inspektur & Koordinator Lapangan)',
                'slug' => 'training-supervisor-fumigasi',
                'level_name' => 'Tingkat Supervisi / Inspektur Lapangan',
                'level_code' => 'Supervisor Fumigasi',
                'badge' => 'Paling Diminati',
                'short_description' => 'Pembinaan kualifikasi manajerial lapangan bagi supervisor teknis, inspektur K3, dan koordinator operasional fumigasi komoditas ekspor dan industri pergudangan.',
                'full_description' => 'Program Training Supervisor Fumigasi membekali calon pengawas teknis dengan kapabilitas penyusunan Rencana Kerja Fumigasi (RKF), pengendalian bahaya lingkungan, manajemen personel teknisi pelaksana, audit kepatuhan protokol karantina, serta verifikasi keabsahan Berita Acara Perlakuan sebelum diserahkan kepada pemilik komoditas.',
                'curriculum' => [
                    'Penyusunan Rencana Kerja Fumigasi (RKF) & Job Safety Analysis (JSA)',
                    'Supervisi Pemasangan Sungkup, Sand Snake, dan Titik Selang Sampling',
                    'Manajemen Dosis Kuratif & Monitoring Ekuilibrium Konsentrasi Gas',
                    'Penanganan Darurat Kebocoran Gas di Lingkungan Industri & Publik',
                    'Audit Kepatuhan Badan Karantina Indonesia & Otoritas Biosekuriti',
                    'Verifikasi Logsheet, Uji Bebas Gas (Gas-Free), & Pengesahan Dokumen'
                ],
                'target_audience' => 'Supervisor Pest Control, Kepala Gudang Logistik, Koordinator K3 Lapangan, Manajer QA Perusahaan Pangan',
                'duration' => '4 Hari (32 Jam Pelajaran Teori & Praktikum Lapangan)',
                'method' => 'Studi Kasus Lapangan, Workshop RKF, & Uji Kelayakan Supervisi',
                'certification' => 'Sertifikat Kompetensi Supervisor Fumigasi & Lisensi K3 Kimia Gas B3',
                'price_note' => 'Konsultasi Jadwal & Kuota Peserta Terbuka',
                'icon' => 'award',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
                'topic_key' => 'supervisor',
            ],
            [
                'title' => 'Training Fumigasi Muda (Operator & Teknisi Lapangan)',
                'slug' => 'training-fumigasi-muda',
                'level_name' => 'Tingkat Pertama / Operasional Lapangan',
                'level_code' => 'Fumigasi Muda',
                'badge' => 'Tingkat Dasar',
                'short_description' => 'Pelatihan dan pembinaan keselamatan kerja terapan bagi pemula/teknisi pelaksana teknis lapangan untuk menguasai tata cara fumigasi ruang tertutup secara aman.',
                'full_description' => 'Program Training Fumigasi Tingkat Muda dirancang untuk menghasilkan teknisi pelaksana fumigator yang disiplin, mematuhi SOP K3 B3, dan menguasai teknik pembuatan sungkup gas (tarping) kedap udara, pelepasan gas terkontrol, pemantauan masa papar, dan aerasi aman.',
                'curriculum' => [
                    'Prinsip Dasar Fumigasi & Biologi Hama Gudang Komoditas',
                    'Karakteristik & Toksisitas Fumigan Fosfin (PH3) dan Metil Bromida (CH3Br)',
                    'Standar APD Khusus Fumigasi & Pengoperasian SCBA Positive Pressure',
                    'Teknik Sungkup (Tarping), Sand Snake, dan Pengujian Kedap Gas',
                    'Perhitungan Dosis, Pengukuran Suhu, dan Masa Papar Efektif',
                    'Prosedur Aerasi Aman, Deteksi Gas Sisa, & Pertolongan Pertama Keracunan Gas'
                ],
                'target_audience' => 'Teknisi PCO Pemula, Petugas Gudang Pangan/Bulog, Operator Logistik, Personel K3',
                'duration' => '3 Hari (24 Jam Pelajaran Teori & Praktik Terbimbing)',
                'method' => 'Tatap Muka Interaktif, Praktikum Alat, & Simulasi Lapangan',
                'certification' => 'Sertifikat Pelatihan Kompetensi Fumigator Muda & Kartu Lisensi K3',
                'price_note' => 'Konsultasi Jadwal & Kuota Peserta Terbuka',
                'icon' => 'shield-check',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
                'topic_key' => 'operator_muda',
            ],
            [
                'title' => 'Training Fumigasi Madya (Teknisi Ahli & Pengawas Fasilitas)',
                'slug' => 'training-fumigasi-madya',
                'level_name' => 'Tingkat Lanjutan / Pengawas Teknis Fasilitas',
                'level_code' => 'Fumigasi Madya',
                'badge' => 'Tingkat Lanjutan',
                'short_description' => 'Pelatihan tingkat lanjutan untuk perencana teknis, pengawas fasilitas silo, dan penanggung jawab perlakuan fumigasi komoditas ekspor skala besar.',
                'full_description' => 'Program Training Fumigasi Madya ditujukan bagi personel teknisi senior yang mengelola fasilitas perlakuan permanen, pergudangan vertikal, instalasi resirkulasi gas, dan mitigasi resistensi serangga gudang.',
                'curriculum' => [
                    'Kinetika Gas Termodinamika & Pola Sorpsi Komoditas Pangan',
                    'Fumigasi Silo Logam/Beton & Gudang Flat Storage Berkapasitas Besar',
                    'Sistem Resirkulasi Gas Tertutup (Closed Loop Recirculation)',
                    'Monitoring Konsentrasi Gas Multi-Titik & Bioassay Resistensi Hama',
                    'Manajemen Tanggap Darurat & Penanganan Kebocoran di Area Terbuka',
                    'Audit Internal Dokumentasi Fitosanitari & Kepatuhan Barantin'
                ],
                'target_audience' => 'Teknisi Senior PCO, Kepala Bagian QA/QC Industri Pangan, Petugas Pengendalian Mutu Silo',
                'duration' => '4 Hari (32 Jam Pelajaran Intensif)',
                'method' => 'Studi Kasus Nyata, Workshop SOP Fasilitas, & Uji Kompetensi',
                'certification' => 'Sertifikat Kompetensi Fumigator Madya & Lisensi Pengawas Karantina',
                'price_note' => 'Konsultasi Jadwal & Kuota Peserta Terbuka',
                'icon' => 'gear-wide-connected',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3,
                'topic_key' => 'madya',
            ],
            [
                'title' => 'Training Fumigasi Utama & Penanggung Jawab Teknis',
                'slug' => 'training-fumigasi-utama',
                'level_name' => 'Tingkat Manajerial / Penanggung Jawab Teknis Resmi',
                'level_code' => 'Fumigasi Utama',
                'badge' => 'Tingkat Utama',
                'short_description' => 'Pembinaan tingkat puncak bagi Technical Director dan Penanggung Jawab Teknis Perusahaan Perlakuan untuk registrasi resmi Badan Karantina Indonesia.',
                'full_description' => 'Program sertifikasi tingkat utama berstandar global ini membekali pimpinan teknis perusahaan dengan kewenangan hukum menandatangani Treatment Certificate resmi yang diakui secara bilateral dan multilateral oleh otoritas biosekuriti negara mitra dagang.',
                'curriculum' => [
                    'Hukum Karantina Internasional (IPPC, FAO, WTO-SPS Agreement)',
                    'Standar Kelayakan Tempat Tindakan Karantina (TTK) Terdaftar Barantin',
                    'Sistem Manajemen Mutu Perlakuan Fitosanitari Terakreditasi',
                    'Kalibrasi & Validasi Sensor Digital Deteksi Gas (PID & Multi-Gas)',
                    'Penerbitan, Verifikasi, & Pengawasan Treatment Certificate e-Phyto',
                    'Audit Kepatuhan Bilateral & Mitigasi Penolakan Kargo Ekspor Dunia'
                ],
                'target_audience' => 'Direktur Teknis Perusahaan PCO, Manajer Karantina & K3 Ekspor, Technical Officer Eksportir',
                'duration' => '5 Hari (40 Jam Pelajaran + Uji Sertifikasi Profesi)',
                'method' => 'Executive Masterclass, Diskusi Panel Ahli, & Sidang Portofolio',
                'certification' => 'Sertifikat Ahli Utama Fumigasi Terakreditasi Badan Karantina Indonesia',
                'price_note' => 'Pendaftaran Terbatas - Konsultasikan Persyaratan Dokumen',
                'icon' => 'globe',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 4,
                'topic_key' => 'utama',
            ],
            [
                'title' => 'Training Fumigasi Standar Kemasan Kayu Ekspor ISPM 15 & Marka IPPC',
                'slug' => 'training-fumigasi-ispm-15',
                'level_name' => 'Spesialisasi Kemasan Kayu & Palet Ekspor',
                'level_code' => 'Standar ISPM 15',
                'badge' => 'Standar Ekspor',
                'short_description' => 'Pelatihan operasional perlakuan fumigasi Metil Bromida (MB) pada kemasan kayu, palet ekspor, dan dunnage sesuai regulasi FAO IPPC ISPM 15.',
                'full_description' => 'Membekali industri produsen palet kayu, perusahaan logistik, dan eksportir mengenai tata cara perlakuan kemasan kayu bebas kulit (debarked wood), kalkulasi dosis suhu tropis, masa retensi 24 jam, serta prosedur resmi pembubuhan stempel marka IPPC terdaftar.',
                'curriculum' => [
                    'Regulasi FAO IPPC ISPM 15 & Permentan Perlakuan Kemasan Kayu',
                    'Biologi Hama Penggerek Kayu (Bostrichidae, Cerambycidae, Scolytinae)',
                    'Kalkulasi Dosis Metil Bromida Sesuai Matriks Suhu Komoditas Kayu',
                    'Uji Kebocoran Ruang Sungkup & Pengukuran Konsentrasi Jam ke-24',
                    'SOP Pembubuhan Marka Stempel IPPC & Pelaporan Registrasi Barantin',
                    'Pencegahan Detensi Palet Kayu di Pelabuhan Internasional Negara Tujuan'
                ],
                'target_audience' => 'Produsen Palet Kayu Ekspor, Fumigator Lapangan ISPM 15, Pengelola Logistik Ekspor',
                'duration' => '3 Hari (24 Jam Pelajaran Intensif)',
                'method' => 'Praktikum Lapangan Perlakuan Palet & Uji Marka Standar',
                'certification' => 'Sertifikat Pelatihan Kompetensi Fumigasi Kemasan Kayu ISPM 15',
                'price_note' => 'Konsultasi Jadwal & Kuota Peserta Terbuka',
                'icon' => 'box-seam',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 5,
                'topic_key' => 'ispm15',
            ],
            [
                'title' => 'Training Fumigasi Akreditasi Standar AFAS Karantina Ekspor Australia',
                'slug' => 'training-akreditasi-afas',
                'level_name' => 'Akreditasi Bilateral Ekspor Australia',
                'level_code' => 'Skema AFAS',
                'badge' => 'Akreditasi Global',
                'short_description' => 'Pembinaan teknis kepatuhan Australian Fumigation Accreditation Scheme (AFAS) untuk pengapalan komoditas dan kontainer tujuan Australia.',
                'full_description' => 'Program pelatihan yang mengacu secara mutlak pada standar biosekuriti Department of Agriculture, Fisheries and Forestry (DAFF) Australia. Melatih pemasangan tiga titik monitoring konsentrasi gas, uji peluruhan tekanan (pressure test), dan tata cara top-up dosis.',
                'curriculum' => [
                    'Prinsip Standar Kepatuhan Australian Fumigation Accreditation Scheme (AFAS)',
                    'Persyaratan Uji Peluruhan Tekanan (Pressure Decay Test 10 Detik)',
                    'Pemasangan 3 Titik Selang Sampling Gas (Top, Middle, Bottom)',
                    'Protokol Injeksi Tambahan (Top-Up) pada Jam ke-4 Pemaparan',
                    'Pengoperasian Vaporizer Pemanas Air Minimal 65 °C',
                    'Penerbitan Treatment Certificate AFAS Resmi Anti-Penolakan Biosekuriti'
                ],
                'target_audience' => 'Fumigator Ekspor Australia, Technical Officer PCO, Manajer Ekspor Komoditas',
                'duration' => '4 Hari (32 Jam Pelajaran Khusus AFAS)',
                'method' => 'Simulasi Enclosure AFAS, Audit Dokumen, & Ujian Standar DAFF',
                'certification' => 'Sertifikat Kualifikasi Teknis Fumigasi Standar AFAS Indonesia',
                'price_note' => 'Konsultasi Jadwal & Kuota Peserta Terbuka',
                'icon' => 'patch-check',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 6,
                'topic_key' => 'afas',
            ],
            [
                'title' => 'Training Fumigasi Keselamatan K3 B3 & Pengoperasian SCBA Fumigator',
                'slug' => 'training-k3-scba-gas-beracun',
                'level_name' => 'Sertifikasi Keselamatan Kerja Kimia B3',
                'level_code' => 'K3 & SCBA',
                'badge' => 'Wajib K3',
                'short_description' => 'Pelatihan intensif keselamatan penanganan gas fumigan beracun tinggi, pengoperasian unit SCBA mandiri, dan manajemen tanggap darurat evakuasi.',
                'full_description' => 'Keselamatan nyawa merupakan prioritas tertinggi. Pelatihan ini melatih setiap teknisi mengoperasikan Self-Contained Breathing Apparatus (SCBA) bertekanan positif 300 bar, fit-test masker, kalibrasi detektor PID digital, penanganan korban asfiksia, dan sterilisasi zona bahaya.',
                'curriculum' => [
                    'Toksikologi Gas Beracun B3 (Fosfin PH3, Metil Bromida CH3Br, Sulfuril Fluorida)',
                    'Pengenalan Batas Paparan: TLV-TWA, STEL, Ceiling, dan Nilai IDLH',
                    'Inspeksi, Uji Tekanan, & Praktik Mandiri Pemakaian Unit SCBA 300 Bar',
                    'Pengoperasian Detektor Gas Elektronik (PID) & Tabung Kimia Dräger/Gastec',
                    'Penetapan Radius Perimeter Bahaya (Danger Zone) & Rambu Reflektif',
                    'Simulasi Tanggap Darurat Evakuasi, Terapi Oksigen Medis, & CPR Korban'
                ],
                'target_audience' => 'Seluruh Aplikator Fumigasi, Petugas K3 Pabrik/Depo, Tim Tanggap Darurat Gudang',
                'duration' => '3 Hari (24 Jam Pelajaran Teori & Praktik Simulasi Darurat)',
                'method' => 'Hands-On SCBA Mandiri, Simulasi Ruang Gelap/Asap, & Uji K3 Praktik',
                'certification' => 'Sertifikat Kompetensi K3 Khusus Fumigasi B3 & Lisensi Operator SCBA',
                'price_note' => 'Konsultasi Jadwal & Kuota Peserta Terbuka',
                'icon' => 'shield-exclamation',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 7,
                'topic_key' => 'k3_scba',
            ],
            [
                'title' => 'Training Fumigasi Fosfin Silo & Pergudangan Pangan Serealia',
                'slug' => 'training-fumigasi-silo-pangan',
                'level_name' => 'Spesialisasi Pergudangan Serealia & Silo Curah',
                'level_code' => 'Fosfin Silo',
                'badge' => 'Industri Pangan',
                'short_description' => 'Pelatihan teknik aplikasi gas Fosfin (PH3) tablet/pelet pada komoditas pangan curah, silo baja vertikal, dan gudang komoditas simpanan pangan.',
                'full_description' => 'Fumigasi komoditas pangan (beras, jagung, gandum, kedelai) menuntut pemahaman kinetika pelepasan gas fosfin lambat dari formulasi aluminium fosfida, pencegahan bahaya ledakan gas konsentrasi tinggi (> 1.8% v/v), dan pemeliharaan kadar air mutu pangan.',
                'curriculum' => [
                    'Karakteristik Senyawa Metal Fosfida (AlP & Mg3P2) & Reaksi Kelembapan',
                    'Fumigasi Silo Logam Vertikal, Gudang Hamparan (Flat Storage), & Palka Silo',
                    'Pencegahan Risiko Peledakan (Explosion Hazard) & Penanganan Kantong Debu',
                    'Pengendalian Sitophilus oryzae, Tribolium castaneum, & Rhyzopertha dominica',
                    'Manajemen Waktu Pemaparan Minimal (7 - 14 Hari) & Aerasi Bebas Residu',
                    'Prosedur Deaktivasi Basah (Wet Deactivation) Sisa Abu Residu Padat B3'
                ],
                'target_audience' => 'Pengelola Gudang Bulog, Supervisor Silo Pabrik Tepung/Pakan, Teknisi Pascapanen Pangan',
                'duration' => '4 Hari (32 Jam Pelajaran Teori & Studi Kasus Silo)',
                'method' => 'Workshop Formulasi Silo, Praktik Deaktivasi Residu, & Uji Efikasi',
                'certification' => 'Sertifikat Pelatihan Kompetensi Fumigasi Fosfin Industri Pangan',
                'price_note' => 'Konsultasi Jadwal & Kuota Peserta Terbuka',
                'icon' => 'building',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 8,
                'topic_key' => 'silo_pangan',
            ],
            [
                'title' => 'Training Fumigasi Palka Kapal Kargo & Pengapalan Maritim',
                'slug' => 'training-fumigasi-palka-kapal',
                'level_name' => 'Spesialisasi Maritim & Terminal Pelabuhan',
                'level_code' => 'Palka Kapal',
                'badge' => 'Maritim Ekspor',
                'short_description' => 'Pelatihan prosedur fumigasi muatan curah di dalam palka kapal kargo samudera, tongkang (barge), dan perlakuan selama pelayaran (in-transit).',
                'full_description' => 'Mengacu pada rekomendasi International Maritime Organization (IMO) dan International Convention for the Safety of Life at Sea (SOLAS). Mempelajari teknik penyegelan tutup palka kapal (hatch covers), instalasi selang sampling multi-deck, dan keselamatan awak kapal di laut lepas.',
                'curriculum' => [
                    'Regulasi Keselamatan Maritim Internasional (IMO Maritime Safety Circulars & SOLAS)',
                    'Konstruksi Palka Kapal Kargo Curah, Sistem Ventilasi, & Titik Rawan Bocor',
                    'SOP Fumigasi Palka Kapal di Pelabuhan Sebelum Berangkat (In-Port Treatment)',
                    'SOP Fumigasi Selama Pelayaran Laut (In-Transit Fumigation) & Prosedur Crew Safety',
                    'Pemasangan Sistem Distribusi Fosfin Resirkulasi Palka Dalam',
                    'Prosedur Degassing dan Clearance Test di Pelabuhan Bongkar Internasional'
                ],
                'target_audience' => 'Fumigator Pelabuhan Samudera, Petugas Karantina Pelabuhan Laut, Surveyor Kargo Maritim',
                'duration' => '4 Hari (32 Jam Pelajaran Maritim)',
                'method' => 'Simulasi Palka Kapal, Pengujian Hatch Cover Sealing, & Uji Kualifikasi',
                'certification' => 'Sertifikat Kompetensi Fumigasi Palka Kapal & Kargo Maritim Resmi',
                'price_note' => 'Konsultasi Jadwal & Kuota Peserta Terbuka',
                'icon' => 'water',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 9,
                'topic_key' => 'palka_kapal',
            ],
            [
                'title' => 'Training Fumigasi Tata Cara Kontainer Ekspor Petikemas FCL/LCL',
                'slug' => 'training-fumigasi-kontainer-ekspor',
                'level_name' => 'Spesialisasi Depo Petikemas & Terminal Ekspor',
                'level_code' => 'Kontainer FCL/LCL',
                'badge' => 'Depo Kontainer',
                'short_description' => 'Pelatihan tata cara penutupan kedap, injeksi gas cepat, dan penerbitan sertifikat bebas gas pada petikemas kontainer ekspor di pelabuhan.',
                'full_description' => 'Perlakuan pada kontainer petikemas ukuran 20 feet dan 40 feet (General Purpose & High Cube) menuntut ketelitian dalam menutup celah pintu karet, ventilasi udara samping, penempatan selang injeksi manifold, serta penerbitan Sertifikat Bebas Gas (Gas-Free Certificate) sebelum peti dinaikkan ke atas kapal.',
                'curriculum' => [
                    'Karakteristik Petikemas Standar ISO 20ft & 40ft Serta Titik Rawan Kebocoran',
                    'Teknik Penyegelan Pintu Gasket, Kisi Ventilasi, & Sambungan Lantai Kontainer',
                    'Perhitungan Dosis Volume Kontainer Bersih dan Bruto (Load Factor)',
                    'Injeksi Gas Cepat Menggunakan Selang Manifold Multi-Nozzle',
                    'SOP Aerasi Cepat Menggunakan Blower Exhaust Portabel Depo Kontainer',
                    'Penerbitan Gas-Free Clearance Certificate Sebelum Proses Stacking Pelabuhan'
                ],
                'target_audience' => 'Operator Depo Petikemas, Petugas Logistik Forwarder, Personel Fumigasi Pelabuhan',
                'duration' => '3 Hari (24 Jam Pelajaran Intensif)',
                'method' => 'Praktikum Lapangan Petikemas Nyata, Uji Kebocoran, & Sertifikasi',
                'certification' => 'Sertifikat Kompetensi Fumigasi Kontainer Ekspor Berstandar Barantin',
                'price_note' => 'Konsultasi Jadwal & Kuota Peserta Terbuka',
                'icon' => 'truck',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 10,
                'topic_key' => 'kontainer_ekspor',
            ],
        ];
    }

    /**
     * Get 10 programs with titles customized to a region
     */
    public static function getProgramsForRegion(string $regionName): array
    {
        $masters = static::getMasterPrograms();
        $results = [];

        foreach ($masters as $item) {
            $copy = $item;
            $copy['regional_title'] = "{$item['title']} — {$regionName}";
            $copy['regional_short_desc'] = "Layanan pembinaan dan sertifikasi {$item['level_code']} yang diselenggarakan secara resmi untuk wilayah {$regionName}.";
            $results[] = (object) $copy;
        }

        return $results;
    }

    /**
     * Find a program by slug
     */
    public static function findMasterProgram(string $slug): ?array
    {
        foreach (static::getMasterPrograms() as $prog) {
            if ($prog['slug'] === $slug) {
                return $prog;
            }
        }
        return null;
    }

    /**
     * Get 10 article topics for a specific program
     */
    public static function getProgramArticleTopics(string $programSlug): array
    {
        $allTopics = [
            'training-supervisor-fumigasi' => [
                ['title' => 'Training Fumigasi Supervisi Rencana Kerja Fumigasi (RKF) dan JSA Lapangan', 'desc' => 'Panduan komprehensif penyusunan dokumen RKF, analisis bahaya kerja K3, serta verifikasi kelayakan lokasi sebelum pelepasan gas.'],
                ['title' => 'Training Fumigasi Pengawasan Pemasangan Sungkup dan Uji Kekedapan Gas', 'desc' => 'Metode supervisi pengikatan sungkup (tarping), susunan sand snake pemberat, dan uji kelayakan gas-tightness enclosure.'],
                ['title' => 'Training Fumigasi Manajemen Dosis Kuratif dan Monitoring Ekuilibrium Konsentrasi Gas', 'desc' => 'Perhitungan matematis dosis volume komoditas, pemerataan sirkulasi gas, dan mitigasi titik dingin (cold spots).'],
                ['title' => 'Training Fumigasi Prosedur Tanggap Darurat dan Mitigasi Kebocoran Gas B3', 'desc' => 'Protokol kesiapsiagaan darurat, evakuasi perimeter bahaya, dan netralisasi kebocoran gas di lingkungan industri.'],
                ['title' => 'Training Fumigasi Audit Kepatuhan Regulasi Karantina Barantin dan Biosekuriti', 'desc' => 'Pemeriksaan standar operasional Tempat Tindakan Karantina (TTK) dan kepatuhan fitosanitari ekspor impor.'],
                ['title' => 'Training Fumigasi Verifikasi Logsheet Fumigasi dan Sertifikasi Bebas Gas', 'desc' => 'Tata cara validasi lembar pencatatan konsentrasi berkala dan penerbitan Gas-Free Clearance Certificate resmi.'],
                ['title' => 'Training Fumigasi Standar K3 Inspektur Fumigasi dan Pengawasan Personel Lapangan', 'desc' => 'Pengawasan kedisiplinan pemakaian APD, pengoperasian tabung SCBA, dan pengawasan rotasi teknisi.'],
                ['title' => 'Training Fumigasi Manajemen Resistensi Serangga Gudang dan Rotasi Perlakuan', 'desc' => 'Strategi deteksi serangga kebal fosfin metode FAO bioassay dan program perlakuan kombinasi berkala.'],
                ['title' => 'Training Fumigasi Supervisi Fasilitas Pergudangan Industri dan Logistik', 'desc' => 'Manajemen operasional perlakuan fumigasi terintegrasi pada komplek pergudangan dan kawasan berikat.'],
                ['title' => 'Training Fumigasi Pengesahan Dokumen Fitosanitari dan Berita Acara Perlakuan', 'desc' => 'Verifikasi keabsahan dokumen perlakuan karantina, penandatanganan Berita Acara, dan pelaporan Barantin.'],
            ],
            'training-fumigasi-muda' => [
                ['title' => 'Training Fumigasi Dasar Keselamatan Kerja dan Pengenalan Toksisitas Fumigan', 'desc' => 'Pembekalan dasar bagi teknisi muda mengenai bahaya paparan gas beracun B3 dan etika keselamatan lapangan.'],
                ['title' => 'Training Fumigasi Karakteristik dan Penanganan Aman Gas Fosfin PH3', 'desc' => 'Tata cara aman membuka kaleng formulasi aluminium fosfida, peletakan nampan gas, dan pencegahan risiko kebakaran.'],
                ['title' => 'Training Fumigasi Standar APD Lengkap dan Pengoperasian SCBA Positive Pressure', 'desc' => 'Praktikum pemakaian respirator full-face, pengecekan tekanan tabung SCBA, dan uji kerapatan masker (fit test).'],
                ['title' => 'Training Fumigasi Teknik Pembuatan Sungkup Gas Tarping dan Sand Snake', 'desc' => 'Keterampilan melipat dan membentangkan terpal plastik gas-tight serta pemasangan ular pasir penutup kebocoran.'],
                ['title' => 'Training Fumigasi Perhitungan Dosis Volumetrik dan Masa Papar Efektif', 'desc' => 'Metode pengukuran volume ruang kubikasi kargo, perhitungan gramase fumigan, dan penetapan durasi paparan.'],
                ['title' => 'Training Fumigasi Prosedur Aerasi Aman dan Pengukuran Residu Gas Threshold Limit', 'desc' => 'Tahapan pembukaan sungkup bertahap, pembuangan gas ke atmosfer terbuka, dan pengukuran konsentrasi aman.'],
                ['title' => 'Training Fumigasi Biologi dan Morfologi Hama Karantina Gudang Serealia', 'desc' => 'Pengenalan hama Sitophilus oryzae, Tribolium, dan Rhyzopertha dominica pada komoditas pangan pokok.'],
                ['title' => 'Training Fumigasi Pertolongan Pertama Gawat Darurat Keracunan Gas Fumigan', 'desc' => 'Penanganan korban pingsan, teknik resusitasi udara bersih, pemberian oksigen darurat, dan rujukan medis.'],
                ['title' => 'Training Fumigasi Pemeliharaan dan Kalibrasi Alat Aplikasi Gas Fumigator Muda', 'desc' => 'Perawatan detektor gas portabel, selang sampling nilon, pipa manifold, dan perlengkapan kerja teknisi.'],
                ['title' => 'Training Fumigasi Simulasi Penutupan Sungkup Kedap Udara di Area Industri', 'desc' => 'Praktik lapangan penyungkupan tumpukan karung komoditas ekspor di gudang penyimpanan tertutup.'],
            ],
            'training-fumigasi-madya' => [
                ['title' => 'Training Fumigasi Termodinamika Gas dan Pola Sorpsi Komoditas Pangan Curah', 'desc' => 'Pemahaman ilmiah difusi gas, adsorpsi, dan desorpsi pada biji-bijian berkelembapan spesifik.'],
                ['title' => 'Training Fumigasi Silo Vertikal Logam dan Beton Kapasitas Besar', 'desc' => 'Metodologi perlakuan komoditas serealia pada silo berkapasitas ribuan ton tanpa pembongkaran muatan.'],
                ['title' => 'Training Fumigasi Instalasi Sistem Resirkulasi Gas Tertutup Closed Loop Recirculation', 'desc' => 'Pemasangan pipa sirkulasi eksternal (J-System) dan blower pendorong untuk mempercepat ekuilibrium gas.'],
                ['title' => 'Training Fumigasi Monitoring Konsentrasi Gas Multi-Titik dan Pengujian Bioassay', 'desc' => 'Pengukuran gas simultan titik atas, tengah, dan bawah serta uji efikasi menggunakan sangkar serangga uji.'],
                ['title' => 'Training Fumigasi Mitigasi Kebocoran Gas Skala Besar di Kawasan Terbuka', 'desc' => 'Skenario tanggap darurat kegagalan enclosure dan langkah lokalisir gas berbahaya di area pelabuhan.'],
                ['title' => 'Training Fumigasi Audit Internal Fitosanitari dan Kepatuhan Tempat Tindakan Karantina', 'desc' => 'Prosedur penilaian mandiri standar kelayakan fasilitas perlakuan terdaftar di Badan Karantina Indonesia.'],
                ['title' => 'Training Fumigasi Pengelolaan Gudang Flat Storage Berkapasitas Ribuan Ton', 'desc' => 'Strategi fumigasi gudang hamparan luas dengan multi-blower dan pemerataan konsentrasi racun gas.'],
                ['title' => 'Training Fumigasi Strategi Penanganan Strain Serangga Hama Resisten Kuat', 'desc' => 'Pengelolaan resistensi dengan perpanjangan masa papar dan kombinasi konsentrasi tinggi terukur.'],
                ['title' => 'Training Fumigasi Rekayasa Aliran Udara dan Desorpsi Gas Pada Biji-Bijian', 'desc' => 'Sistem pembersihan sisa gas fumigan di dalam rongga butiran pangan sebelum proses distribusi konsumen.'],
                ['title' => 'Training Fumigasi Prosedur Sertifikasi Kelayakan Fasilitas Madya', 'desc' => 'Uji kompetensi kelayakan teknisi ahli madya dan penerbitan rekomendasi operasional fasilitas.'],
            ],
            'training-fumigasi-utama' => [
                ['title' => 'Training Fumigasi Kebijakan Internasional Karantina Tumbuhan IPPC dan FAO', 'desc' => 'Studi komparasi konvensi internasional fitosanitari dan implementasi kebijakan proteksi perbatasan.'],
                ['title' => 'Training Fumigasi Standar Skema Akreditasi Australia AFAS', 'desc' => 'Pemenuhan persyaratan bilateral Departemen Pertanian Australia untuk kelayakan perlakuan ekspor.'],
                ['title' => 'Training Fumigasi Protokol Kemasan Kayu Ekspor Berstandar ISPM 15', 'desc' => 'Manajemen registrasi badan usaha perlakuan kayu dan pengawasan penggunaan stempel resmi IPPC.'],
                ['title' => 'Training Fumigasi Manajemen Direksi Teknis Penanggung Jawab Karantina', 'desc' => 'Peran penanggung jawab teknis dalam akreditasi, audit berkala, dan kredibilitas sertifikat ekspor.'],
                ['title' => 'Training Fumigasi Audit Kepatuhan Bilateral Otoritas Biosekuriti Antar-Negara', 'desc' => 'Persiapan audit verifikasi langsung oleh auditor karantina negara mitra dagang internasional.'],
                ['title' => 'Training Fumigasi Validasi Alat Sensor Gas dan Sertifikasi Interferometer', 'desc' => 'Standar kalibrasi refraktometer gas Riken, sensor elektronik PID, dan ketertelusuran metrologi.'],
                ['title' => 'Training Fumigasi Penandatanganan dan Otorisasi Treatment Certificate Internasional', 'desc' => 'Hukum dan tanggung jawab legal penandatangan sertifikat perlakuan ekspor karantina tumbuhan.'],
                ['title' => 'Training Fumigasi Integrasi Sertifikasi Elektronik e-Phyto Badan Karantina Indonesia', 'desc' => 'Pemanfaatan sistem digital sertifikasi karantina untuk pertukaran data antar-pelabuhan global.'],
                ['title' => 'Training Fumigasi Manajemen Risiko Fitosanitari dan Biosekuriti Ekspor Global', 'desc' => 'Analisis risiko masuknya hama invasif asing dan mitigasi potensi embargo perdagangan komoditas.'],
                ['title' => 'Training Fumigasi Tata Kelola Perusahaan Jasa Perlakuan Karantina Terakreditasi', 'desc' => 'Standar mutu operasional ISO 9001 dan ISO 17020 untuk badan usaha pengendali hama profesional.'],
            ],
            'training-fumigasi-ispm-15' => [
                ['title' => 'Training Fumigasi Standar Baku Kemasan Kayu Ekspor FAO ISPM 15', 'desc' => 'Ketentuan regulasi perlakuan kemasan kayu, palet, peti, dunnage, dan koli ekspor lintas benua.'],
                ['title' => 'Training Fumigasi Perlakuan Metil Bromida Pada Palet Kayu dan Dunnage', 'desc' => 'SOP injeksi gas CH3Br, kurva konsentrasi waktu (Ct-product), dan masa penahanan 24 jam.'],
                ['title' => 'Training Fumigasi Standar Heat Treatment dan Dielectric Heating Kemasan Kayu', 'desc' => 'Alternatif perlakuan pemanasan inti kayu 56 °C selama 30 menit sesuai pedoman teknis IPPC.'],
                ['title' => 'Training Fumigasi Tata Cara Pembubuhan Stempel Marka Resmi IPPC Karantina', 'desc' => 'Desain, letak penomoran ID terdaftar, dan pencegahan pemalsuan marka kayu ekspor Indonesia.'],
                ['title' => 'Training Fumigasi Identifikasi Kumbang Penggerek Kayu Cerambycidae dan Bostrichidae', 'desc' => 'Morfologi serangga target karantina kayu dan tanda kerusakan aktif serbuk kayu (frass).'],
                ['title' => 'Training Fumigasi Uji Kadar Air Kayu dan Pencegahan Re-Infestasi Pasca-Perlakuan', 'desc' => 'Pengukuran moisture content kayu di bawah 20% dan penyimpanan higienis di gudang beratap.'],
                ['title' => 'Training Fumigasi Audit Tempat Pengolahan dan Penyimpanan Kemasan Kayu Terdaftar', 'desc' => 'Persiapan inspeksi tahunan oleh pejabat karantina tumbuhan pada fasilitas wood treatment.'],
                ['title' => 'Training Fumigasi Penelusuran Dokumen Traceability Kemasan Kayu Ekspor', 'desc' => 'Pencatatan rantai pasok kayu dari gergajian legal hingga pengiriman ke terminal kontainer.'],
                ['title' => 'Training Fumigasi Sertifikasi Pemenuhan Standar Karantina Kemasan Kayu Uni Eropa', 'desc' => 'Kepatuhan phytosanitary import requirements di pelabuhan Rotterdam, Hamburg, dan Antwerpen.'],
                ['title' => 'Training Fumigasi Mitigasi Penolakan Kargo Ekspor Akibat Pelanggaran ISPM 15', 'desc' => 'Penanganan notifikasi ketidakpatuhan (Non-Compliance) dan re-treatment sebelum re-ekspor.'],
            ],
            'training-akreditasi-afas' => [
                ['title' => 'Training Fumigasi Regulasi Biosekuriti DAFF Australia dan Skema AFAS', 'desc' => 'Studi mendalam skema akreditasi bilateral Australia-Indonesia untuk mencegah masuknya OPTK.'],
                ['title' => 'Training Fumigasi Prosedur Uji Peluruhan Tekanan Pressure Decay Enclosure AFAS', 'desc' => 'Uji manometer diferensial standar 10 detik dan 20 detik untuk membuktikan kekedapan ruang gas.'],
                ['title' => 'Training Fumigasi Penempatan Titik Monitoring Konsentrasi Gas Top Middle Bottom', 'desc' => 'Instalasi tiga selang sampling ketinggian berbeda untuk memastikan distribusi gas merata.'],
                ['title' => 'Training Fumigasi Lembar Kerja Resmi Fumigation Record of Treatment AFAS', 'desc' => 'Pencatatan wajib suhu minimum, dosis perlakuan, pembacaan konsentrasi, dan data kontainer.'],
                ['title' => 'Training Fumigasi Perhitungan Dosis Suhu Minimum Kargo Ekspor Australia', 'desc' => 'Penyesuaian dosis metil bromida berdasarkan tabel suhu komoditas terdingin selama perlakuan.'],
                ['title' => 'Training Fumigasi Prosedur Pengujian Bebas Gas dan Aerasi Berstandar DAFF', 'desc' => 'Protokol ventilasi paksa dan verifikasi sisa gas di bawah 5 ppm sebelum kontainer ditutup kembali.'],
                ['title' => 'Training Fumigasi Audit Fasilitas PCO Terakreditasi AFAS oleh Karantina Indonesia', 'desc' => 'Mekanisme verifikasi tahunan daftar fumigator teregistrasi pada portal resmi biosekuriti Australia.'],
                ['title' => 'Training Fumigasi Pencegahan Penyelundupan Biosekuriti dan Hama Khapra Beetle', 'desc' => 'Perlakuan khusus komoditas berisiko tinggi terhadap serangga Trogoderma granarium.'],
                ['title' => 'Training Fumigasi Sertifikasi Akreditasi AFAS Tingkat Mahir', 'desc' => 'Uji kompetensi kelayakan teknisi pemegang akreditasi AFAS untuk pengapalan ke pelabuhan Australia.'],
                ['title' => 'Training Fumigasi Studi Kasus Kepatuhan Petikemas Ekspor ke Australia', 'desc' => 'Evaluasi kasus lolos biosekuriti di pelabuhan Melbourne, Sydney, Brisbane, dan Fremantle.'],
            ],
            'training-k3-scba-gas-beracun' => [
                ['title' => 'Training Fumigasi Toksikologi Gas B3 Fosfin dan Metil Bromida Bagi Tubuh Manusia', 'desc' => 'Mekanisme racun pernapasan, gejala klinis edema paru, dan ambang batas TLV-TWA serta IDLH.'],
                ['title' => 'Training Fumigasi Pengoperasian SCBA Positive Pressure dan Kelengkapan Safety', 'desc' => 'Tata cara mengenakan backpack harness, membuka valve silinder 300 bar, dan cek peluit tanda bahaya.'],
                ['title' => 'Training Fumigasi Pengujian Kekedapan Masker Wajah Fit Testing dan Silinder SCBA', 'desc' => 'Uji tekanan positif dan negatif masker silikon full-face serta jadwal uji hidrostatis tabung komposit.'],
                ['title' => 'Training Fumigasi Perhitungan Konsumsi Udara dan Waktu Aman Evakuasi Darurat SCBA', 'desc' => 'Formula matematis estimasi durasi udara kerja (40-45 menit) dan aturan waktu kembali saat alarm berbunyi.'],
                ['title' => 'Training Fumigasi Penggunaan Masker Gas Full-Face dan Karakteristik Kanister Kimia', 'desc' => 'Batasan penggunaan kanister filter tipe B/P3 dan larangan pemakaian pada ruang minim oksigen.'],
                ['title' => 'Training Fumigasi Zonasi Perimeter Bahaya dan Pemasangan Tanda Peringatan Gas Beracun', 'desc' => 'Pemasangan pita pembatas zona merah, kuning, hijau serta bendera peringatan tengkorak gas berbahaya.'],
                ['title' => 'Training Fumigasi Deteksi Gas Portabel Tabung Dräger dan Alat Digital PID', 'desc' => 'Pengoperasian pompa tangan Dräger Accuro dan kalibrasi sensor gas digital beresolusi 0.01 ppm.'],
                ['title' => 'Training Fumigasi Prosedur Dekontaminasi dan Penanganan Tumpahan Bahan Aktif Fumigan', 'desc' => 'Inaktivasi residu abu fosfin dengan metode dehidrasi terkontrol dan pembuangan limbah B3 resmi.'],
                ['title' => 'Training Fumigasi Protokol Evakuasi Korban dan Resusitasi CPR Keracunan', 'desc' => 'Langkah evakuasi darurat dua orang, pemberian oksigen medis murni, dan penanganan syok toksik.'],
                ['title' => 'Training Fumigasi Sertifikasi Lisensi K3 Kimia dan Petugas Ruang Terbatas Confined Space', 'desc' => 'Pemenuhan regulasi Kemenaker RI dan Badan Karantina untuk izin kerja gas berbahaya.'],
            ],
            'training-fumigasi-silo-pangan' => [
                ['title' => 'Training Fumigasi Konstruksi dan Karakteristik Silo Pangan Logam dan Beton', 'desc' => 'Studi ketahanan struktur silo curah terhadap tekanan gas dan mitigasi celah kebocoran fondasi.'],
                ['title' => 'Training Fumigasi Aplikasi Tablet dan Pellet Aluminium Fosfida Serta Magnesium Fosfida', 'desc' => 'Teknik penyebaran formulasi pelepasan gas lambat dan cepat pada puncak tumpukan serealia.'],
                ['title' => 'Training Fumigasi Instalasi Pipa Injeksi Gas dan Sistem Distribusi Fosfin Merata', 'desc' => 'Pemasangan jalur pipa penetrasi dari dasar silo hopper hingga kubah atas penyimpanan.'],
                ['title' => 'Training Fumigasi Pencegahan Ledakan Gas Fosfin Akibat Kelembapan Udara Ekstrem', 'desc' => 'Pengendalian suhu dan kelembapan nisbi untuk mencegah konsentrasi gas melampaui LEL (1.8% v/v).'],
                ['title' => 'Training Fumigasi Monitoring Konsentrasi Gas Silo Tanpa Memasuki Ruang Tertutup', 'desc' => 'Pengukuran jarak jauh menggunakan selang sampling sampling line dan pompa hisap elektronik.'],
                ['title' => 'Training Fumigasi Perlindungan Komoditas Jagung Kedelai dan Gandum Curah Pascapanen', 'desc' => 'Eliminasi hama Sitophilus zeamais dan ngengat gudang tanpa menurunkan daya kecambah biji.'],
                ['title' => 'Training Fumigasi Manajemen Aerasi Buang Gas Silo Menggunakan Blower Berdaya Tinggi', 'desc' => 'Pengoperasian fan aerasi bervolume besar hingga konsentrasi fosfin di dalam silo mencapai batas nol.'],
                ['title' => 'Training Fumigasi Pengendalian Hama Sitophilus dan Tribolium Pada Penyimpanan Silo Lama', 'desc' => 'Protokol perlakuan kuratif tuntas pada komoditas cadangan pangan strategis nasional.'],
                ['title' => 'Training Fumigasi Perawatan Kedap Gas Atap Silo Katup Pembuangan dan Manhole', 'desc' => 'Aplikasi sealant elastomerik dan inspeksi seal karet palka sebelum pengisian gas fumigan.'],
                ['title' => 'Training Fumigasi Standar Mutu Keamanan Pangan dan Batas Residu Pestisida MRL Silo', 'desc' => 'Kepatuhan standar Codex Alimentarius dan Badan Pangan Nasional atas komoditas pasca-fumigasi.'],
            ],
            'training-fumigasi-palka-kapal' => [
                ['title' => 'Training Fumigasi Regulasi Maritim IMO Konvensi SOLAS dan Karantina Pelabuhan Laut', 'desc' => 'Penerapan rekomendasi International Maritime Organization (IMO MSC.1/Circ.1264) pada kapal kargo.'],
                ['title' => 'Training Fumigasi Penutupan Kedap Palka Kapal Curah Hatch Cover Sealing', 'desc' => 'Aplikasi Ram-Nek tape, busa expandable, dan pengujian segel kedap air/gas penutup palka kapal.'],
                ['title' => 'Training Fumigasi Prosedur In-Transit Selama Pelayaran Antarpulau dan Samudera', 'desc' => 'Manajemen fumigasi selama masa layar kapal dengan pengawasan harian oleh perwira terlatih.'],
                ['title' => 'Training Fumigasi Saluran Resirkulasi Gas Palka Kapal Menggunakan Fan Khusus', 'desc' => 'Sistem perpipaan loop tertutup dari dasar palka ke atas muatan untuk mempercepat penetrasi gas.'],
                ['title' => 'Training Fumigasi Keselamatan Kru Kapal dan Uji Kebocoran Ruang Akomodasi', 'desc' => 'Pencegahan rembesan gas maut ke kamar mesin, ruang kemudi, dan kabin tempat tinggal pelaut.'],
                ['title' => 'Training Fumigasi Deteksi Gas di Laut Lepas dan Prosedur Tindakan Darurat Nahkoda', 'desc' => 'Peralatan monitoring mandiri di atas kapal dan SOP ventilasi darurat saat terdeteksi kebocoran.'],
                ['title' => 'Training Fumigasi Prosedur Degassing dan Aerasi Palka Sebelum Bongkar Muat di Pelabuhan', 'desc' => 'Pembukaan palka secara aman di zona labuh jangkar (anchorage) sebelum kapal sandar di dermaga.'],
                ['title' => 'Training Fumigasi Pengambilan Sampel Kargo Curah dan Uji Bebas Serangga Hidup', 'desc' => 'Verifikasi kebersihan kargo impor/ekspor oleh petugas karantina sebelum izin bongkar terbit.'],
                ['title' => 'Training Fumigasi Penerbitan Gas-Free Certificate Maritim dan Izin Masuk Palka Gas Clearance', 'desc' => 'Pengukuran gas multi-titik palka dan pengesahan dokumen keselamatan kerja bongkar muat buruh TKBM.'],
                ['title' => 'Training Fumigasi Koordinasi Otoritas Pelabuhan Syahbandar dan Karantina Perbatasan', 'desc' => 'Alur komunikasi resmi agen perkapalan, syahbandar, dan Kantor Karantina Kesehatan/Tumbuhan.'],
            ],
            'training-fumigasi-kontainer-ekspor' => [
                ['title' => 'Training Fumigasi Anatomi Petikemas ISO 20ft dan 40ft Serta Titik Rawan Kebocoran Gas', 'desc' => 'Pemeriksaan integritas dinding corrugation, lantai kayu lapis, dan gasket karet pintu kontainer.'],
                ['title' => 'Training Fumigasi Teknik Penyegelan Karet Pintu Gasket dan Lubang Ventilasi Petikemas', 'desc' => 'Metode taping kedap gas pada kisi ventilasi samping dan sudut bawah pintu petikemas ekspor.'],
                ['title' => 'Training Fumigasi Penataan Kargo FCL dan LCL Untuk Penetrasi Gas Maksimal', 'desc' => 'Pengaturan jarak bebas (clearance) di atas tumpukan palet untuk sirkulasi gas yang merata.'],
                ['title' => 'Training Fumigasi Pemasangan Selang Injeksi Gas Manifold dan Selang Sampling Udara', 'desc' => 'Pemasangan selang pipa tembaga/nilon melalui celah karet pintu tanpa merusak struktur segel.'],
                ['title' => 'Training Fumigasi Perhitungan Dosis Bersih Ruang Kosong Headspace Kontainer Ekspor', 'desc' => 'Perhitungan volume kosong kontainer setelah dikurangi volume bersih kargo padat.'],
                ['title' => 'Training Fumigasi Masa Papar di Depo Kontainer Pelabuhan', 'desc' => 'Pengawasan kontainer dalam masa karantina di zona aman depo petikemas terminal ekspor.'],
                ['title' => 'Training Fumigasi Teknik Aerasi Cepat Menggunakan Exhaust Blower Khusus Petikemas', 'desc' => 'Pembersihan gas dengan blower portabel berdaya hisap tinggi sebelum kontainer dinaikkan ke kapal.'],
                ['title' => 'Training Fumigasi Pengujian Konsentrasi Gas Residu di Bawah Batas TLV 0.3 ppm dan 5 ppm', 'desc' => 'Verifikasi konsentrasi aman sebelum kontainer diserahkan ke pihak ekspedisi logistik.'],
                ['title' => 'Training Fumigasi Penerbitan Gas-Free Clearance Certificate Sebelum Stacking Dermaga', 'desc' => 'Pengesahan sertifikat bebas gas sebagai syarat wajib kontainer masuk ke terminal CY pelabuhan.'],
                ['title' => 'Training Fumigasi Kepatuhan Karantina Pra-Pengapalan Petikemas Siap Muat', 'desc' => 'Penerbitan dokumen fitosanitari resmi dan pelekatan segel karantina sebelum proses stuffing ekspor.'],
            ],
        ];

        return $allTopics[$programSlug] ?? [
            ['title' => "Training Fumigasi Kurikulum Dasar Modul 1", 'desc' => 'Dasar materi dan kurikulum standar perlakuan.'],
            ['title' => "Training Fumigasi Standar Teknis Modul 2", 'desc' => 'Spesifikasi operasional dan bimbingan teknis.'],
            ['title' => "Training Fumigasi Prosedur Keselamatan Modul 3", 'desc' => 'Penerapan K3 dan mitigasi bahaya kimia.'],
            ['title' => "Training Fumigasi Penanganan Alat Modul 4", 'desc' => 'Aplikasi alat dan kalibrasi sensor perlakuan.'],
            ['title' => "Training Fumigasi Tata Cara Perlakuan Modul 5", 'desc' => 'Pelaksanaan tindakan di fasilitas penyimpanan.'],
            ['title' => "Training Fumigasi Pengujian Efikasi Modul 6", 'desc' => 'Evaluasi mortalitas serangga target karantina.'],
            ['title' => "Training Fumigasi Aerasi dan Pembersihan Modul 7", 'desc' => 'Penetapan batas aman residu dan ventilasi gas.'],
            ['title' => "Training Fumigasi Kepatuhan Regulasi Modul 8", 'desc' => 'Standar Badan Karantina Indonesia dan ekspor.'],
            ['title' => "Training Fumigasi Sertifikasi Mutu Modul 9", 'desc' => 'Uji kompetensi dan penerbitan sertifikat resmi.'],
            ['title' => "Training Fumigasi Dokumentasi dan Audit Modul 10", 'desc' => 'Penyusunan laporan dan audit kepatuhan fasilitas.'],
        ];
    }

    /**
     * Get 10 articles for a program and region
     */
    public static function getArticlesForProgram(string $programSlug, string $regionName): array
    {
        $program = static::findMasterProgram($programSlug);
        $topics = static::getProgramArticleTopics($programSlug);
        $articles = [];

        foreach ($topics as $index => $t) {
            $num = $index + 1;
            $rawTopic = $t['title'];
            if (!str_starts_with($rawTopic, 'Training Fumigasi ')) {
                $rawTopic = preg_replace('/^Training\s+(Fumigasi\s+)?/i', 'Training Fumigasi ', $rawTopic);
            }
            $modTitle = "{$rawTopic} di {$regionName}";
            $modSlug = Str::slug("{$rawTopic}-di-{$regionName}");
            
            $articles[] = (object) [
                'id' => "{$programSlug}-{$num}",
                'module_number' => $num,
                'topic_title' => $rawTopic,
                'title' => $modTitle,
                'slug' => $modSlug,
                'category' => $program['level_name'] ?? 'Regulasi & Standar Ekspor',
                'region' => $regionName,
                'reading_time' => '45 Menit (Panduan Lengkap)',
                'word_count' => 'Panduan Lengkap',
                'excerpt' => "{$t['desc']} Diselenggarakan khusus untuk wilayah {$regionName} dengan kurikulum terpadu berstandar Badan Karantina Indonesia, FAO ISPM 15, dan AFAS.",
                'author' => 'Tim Ahli & Instruktur Badan Karantina Indonesia',
            ];
        }

        return $articles;
    }

    /**
     * Get existing Article or dynamically generate and persist a 6000-9000 word article by slug
     */
    public static function getOrGenerateArticleBySlug(string $programSlug, string $articleSlug, string $regionName): Article
    {
        // 1. Identify which topic matches the slug
        $topics = static::getProgramArticleTopics($programSlug);
        $matchedTopic = null;

        foreach ($topics as $t) {
            $rawTopic = $t['title'];
            if (!str_starts_with($rawTopic, 'Training Fumigasi ')) {
                $rawTopic = preg_replace('/^Training\s+(Fumigasi\s+)?/i', 'Training Fumigasi ', $rawTopic);
            }
            $expectedSlug = Str::slug("{$rawTopic}-di-{$regionName}");
            if ($expectedSlug === $articleSlug || Str::contains($articleSlug, Str::slug($rawTopic))) {
                $matchedTopic = $t;
                $matchedTopic['title'] = $rawTopic;
                break;
            }
        }

        if (!$matchedTopic) {
            $matchedTopic = $topics[0];
            if (!str_starts_with($matchedTopic['title'], 'Training Fumigasi ')) {
                $matchedTopic['title'] = preg_replace('/^Training\s+(Fumigasi\s+)?/i', 'Training Fumigasi ', $matchedTopic['title']);
            }
        }

        $expectedTitle = "{$matchedTopic['title']} di {$regionName}";
        $program = static::findMasterProgram($programSlug);
        $programTitle = $program ? $program['title'] : 'Training Fumigasi';

        // Check if article with this title or slug exists
        $article = Article::where('slug', $articleSlug)->orWhere('title', $expectedTitle)->first();
        if ($article && str_word_count(strip_tags($article->content)) >= 6000) {
            if ($article->title !== $expectedTitle) {
                $article->update([
                    'title' => $expectedTitle,
                    'slug' => Str::slug($expectedTitle),
                ]);
            }
            return $article;
        }

        // Dynamically generate the full 6,000 - 9,000 word article
        $generator = new \Database\Seeders\ArticleSeeder();

        $serviceConfig = [
            'id' => $programSlug . '-' . Str::slug($matchedTopic['title']),
            'title_prefix' => $matchedTopic['title'],
            'category' => $program['level_name'] ?? 'Regulasi & Standar Ekspor',
            'author' => 'Tim Ahli & Instruktur Badan Karantina Indonesia',
            'reading_time' => '45 Menit (Panduan Lengkap)',
            'service_name' => $matchedTopic['title'],
            'target_pest' => 'Hama Karantina Tumbuhan (OPTK) & Serangga Perusak Komoditas Pergudangan',
            'chemical' => 'Fosfin (PH3) dan Metil Bromida (CH3Br) Sesuai Standar Barantin',
            'focus' => "pelaksanaan bimbingan teknis {$matchedTopic['title']}, kepatuhan standar K3 gas beracun, dan pemenuhan regulasi fitosanitari ekspor",
        ];

        $cityConfig = [
            'name' => $regionName,
            'port' => "Pelabuhan dan Sentra Logistik Regional {$regionName}",
            'commodities' => "komoditas perkebunan, pertanian, pangan simpanan, dan kemasan kayu ekspor di {$regionName}",
            'geography' => "wilayah strategis {$regionName} dengan konektivitas rantai pasok perdagangan antarpulau dan pasar ekspor internasional",
            'climate' => "iklim tropis Indonesia dengan kelembapan nisbi hangat yang memerlukan pengawasan ketat terhadap kebersihan biologis kargo",
            'profile' => "sentra pertumbuhan ekonomi dan kawasan perlakuan karantina komoditas di wilayah {$regionName}",
        ];

        $content = $generator->generateFullArticleText($serviceConfig, $cityConfig, $expectedTitle);

        if ($article) {
            $article->update([
                'title' => $expectedTitle,
                'slug' => Str::slug($expectedTitle),
                'content' => $content,
                'category' => $serviceConfig['category'],
                'region' => $regionName,
                'reading_time' => '45 Menit (Panduan Lengkap)',
                'excerpt' => "Panduan resmi kurikulum pelatihan {$matchedTopic['title']} di wilayah {$regionName}. Disusun mengacu pada regulasi Badan Karantina Indonesia, standar FAO ISPM 15, skema AFAS, dan prosedur keselamatan K3.",
            ]);
            return $article;
        }

        return Article::create([
            'title' => $expectedTitle,
            'slug' => $articleSlug,
            'category' => $serviceConfig['category'],
            'region' => $regionName,
            'author' => $serviceConfig['author'],
            'reading_time' => '45 Menit (Panduan Lengkap)',
            'excerpt' => "Panduan resmi kurikulum pelatihan {$matchedTopic['title']} di wilayah {$regionName}. Disusun mengacu pada regulasi Badan Karantina Indonesia, standar FAO ISPM 15, skema AFAS, dan prosedur keselamatan K3.",
            'content' => $content,
            'is_published' => true,
            'views' => rand(250, 750),
            'published_at' => now(),
        ]);
    }

    /**
     * Legacy single article fetcher
     */
    public static function getOrGenerateArticle(string $programSlug, string $regionName): Article
    {
        $topics = static::getProgramArticleTopics($programSlug);
        $firstTopic = $topics[0]['title'];
        $slug = Str::slug("{$firstTopic}-di-{$regionName}");
        return static::getOrGenerateArticleBySlug($programSlug, $slug, $regionName);
    }
}
