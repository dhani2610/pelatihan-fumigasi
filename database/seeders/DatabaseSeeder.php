<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Setting;
use App\Models\Program;
use App\Models\Article;
use App\Models\Faq;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@fumigasi.com'],
            [
                'name' => 'Administrator Fumigasi',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Settings (WhatsApp & General)
        $settings = [
            'whatsapp_number' => '6281399810272', // WA layang / floating button
            'whatsapp_numbers_list' => json_encode(['08118500177', '081399810272', '087894580806', '087894580649']),
            'whatsapp_template' => 'Halo Admin Pelatihan Fumigasi, saya ingin informasi dan konsultasi pendaftaran pelatihan untuk wilayah {region}. Mohon info jadwal terbaru dan persyaratannya.',
            'site_name' => 'SERTIFIKASI FUMIGASI',
            'site_subtitle' => 'Standar Keselamatan & Karantina Fumigasi Nasional',
            'site_hero_title' => 'WUJUDKAN OPERASI BEBAS HAMA DENGAN SERTIFIKASI FUMIGASI RESMI',
            'site_hero_desc' => 'Tingkatkan kualifikasi dan kompetensi keselamatan fumigator bagi tenaga kerja profesional di seluruh Indonesia. Tersedia jenjang pembinaan terstruktur untuk level Muda, Madya, hingga Utama berstandar Barantin & ISPM 15.',
            'contact_phone' => '+62 812-3456-7890',
            'contact_email' => 'info@pelatihanfumigasi.id',
            'contact_address' => 'Gedung Pusat Pelatihan Karantina & K3 Nasional, Kawasan Logistik Terpadu, Jakarta',
            'notice_text' => 'Catatan penting: Halaman ini adalah halaman informasi dan konsultasi. Penyelenggaraan pelatihan Fumigasi di kota atau kabupaten berada dalam pengawasan standar keselamatan fumigan (Fosfin/PH3 & Metil Bromida/CH3Br) serta regulasi karantina tumbuhan dan K3 nasional.',
        ];

        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }

        // 3. Programs (10 Master Programs)
        $programs = \App\Services\ProgramRegionService::getMasterPrograms();

        foreach ($programs as $prog) {
            Program::updateOrCreate(
                ['slug' => $prog['slug']],
                collect($prog)->except('topic_key')->toArray()
            );
        }

        // 4. Articles
        $this->call(ArticleSeeder::class);

        // 5. FAQs
        $faqs = [
            [
                'question' => 'Apakah pelatihan Fumigasi tersedia di wilayah Provinsi / Kabupaten saya?',
                'answer' => 'Ya, kami melayani bimbingan dan pelatihan sertifikasi fumigasi untuk seluruh wilayah provinsi dan kabupaten/kota di Indonesia. Anda dapat memilih mengikuti kelas pelatihan publik terpusat, bimbingan online/blended, maupun in-house training langsung di lokasi pabrik, gudang, atau pelabuhan perusahaan Anda.',
                'category' => 'general',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Jenjang apa saja yang tersedia untuk pelatihan Fumigasi?',
                'answer' => 'Tersedia 3 jenjang berjenjang: Training Fumigasi Tingkat Muda (Operator / Teknisi Lapangan), Training Fumigasi Tingkat Madya (Supervisor & Inspektur Karantina), serta Training Fumigasi Tingkat Utama & Standar Ekspor (AFAS / ISPM 15 untuk Manajerial dan Penanggung Jawab Teknis).',
                'category' => 'general',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Bagaimana cara mendapatkan informasi jadwal dan biaya pelatihan?',
                'answer' => 'Anda dapat langsung menekan tombol "Konsultasi WhatsApp" di website ini atau mengisi formulir pada menu Hubungi Kami. Tim konsultan resmi kami akan segera mengirimkan jadwal batch terdekat, silabus lengkap, rincian biaya investasi, dan kelengkapan administrasi.',
                'category' => 'general',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah tersedia pelatihan in-house untuk perusahaan kami?',
                'answer' => 'Sangat tersedia. Kami sering mengadakan program in-house training bagi perusahaan pest control (PCO), industri pangan, pergudangan silo, pengelola pelabuhan, eksportir kopi/kakao/rempah, hingga industri kemasan kayu. Jadwal dan lokasi dapat disesuaikan dengan kebutuhan operasional perusahaan Anda.',
                'category' => 'general',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Sertifikat apa yang akan diperoleh setelah lulus pelatihan?',
                'answer' => 'Peserta yang dinyatakan lulus akan mendapatkan Sertifikat Kompetensi Pelatihan Fumigasi Resmi, Transkrip Jam Pembelajaran (JP), Kartu Tanda Kompetensi K3 Bahan Kimia Berbahaya, serta panduan pendaftaran/pemenuhan sertifikasi Barantin (Badan Karantina Indonesia).',
                'category' => 'general',
                'sort_order' => 5,
                'is_active' => true,
            ]
        ];

        foreach ($faqs as $f) {
            Faq::updateOrCreate(['question' => $f['question']], $f);
        }
    }
}
