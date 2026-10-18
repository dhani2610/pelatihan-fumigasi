<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Program;
use App\Models\Article;
use App\Models\Faq;
use App\Models\ContactMessage;
use App\Services\RegionService;
use App\Services\ProgramRegionService;

class FrontController extends Controller
{
    protected function getWaLink(?string $regionName = null, ?string $programName = null): string
    {
        $phone = Setting::get('whatsapp_number', '6281234567890');
        // Clean phone number (remove non-digits, replace leading 0 with 62)
        $phone = preg_replace('/[^0-9]/', '', $phone);
        if (str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        }

        $template = Setting::get('whatsapp_template', 'Halo Admin Pelatihan Fumigasi, saya ingin informasi dan konsultasi pendaftaran pelatihan untuk wilayah {region}. Mohon info jadwal terbaru dan persyaratannya.');
        
        $regionText = $regionName ?? 'Nasional';
        $programText = $programName ? " program {$programName}" : '';

        $message = str_replace(
            ['{region}', '{program}'],
            [$regionText, $programText],
            $template
        );

        if (!$regionName && !str_contains($template, '{region}')) {
            $message = "Halo Admin Pelatihan Fumigasi, saya ingin konsultasi pendaftaran pelatihan{$programText}. Mohon informasi jadwal dan biayanya.";
        }

        return "https://api.whatsapp.com/send?phone={$phone}&text=" . urlencode($message);
    }

    public function index()
    {
        $programs = Program::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $articles = Article::where('is_published', true)->orderBy('published_at', 'desc')->take(3)->get();
        $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $provinces = RegionService::getProvinces();
        $waLink = $this->getWaLink();

        return view('front.index', compact('programs', 'articles', 'faqs', 'provinces', 'waLink'));
    }

    public function programDetail($slug)
    {
        $program = Program::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $otherPrograms = Program::where('id', '!=', $program->id)->where('is_active', true)->get();
        $waLink = $this->getWaLink(null, $program->title);
        $faqs = Faq::where('is_active', true)->take(4)->get();

        return view('front.program-detail', compact('program', 'otherPrograms', 'waLink', 'faqs'));
    }

    public function articles(Request $request)
    {
        $query = Article::where('is_published', true)->orderBy('published_at', 'desc');
        if ($request->has('q')) {
            $query->where('title', 'like', '%' . $request->q . '%')
                  ->orWhere('content', 'like', '%' . $request->q . '%');
        }
        $articles = $query->paginate(9);
        $programs = Program::where('is_active', true)->get();
        $waLink = $this->getWaLink();

        return view('front.articles', compact('articles', 'programs', 'waLink'));
    }

    public function articleDetail($slug)
    {
        $article = Article::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $article->increment('views');
        $relatedArticles = Article::where('id', '!=', $article->id)->where('is_published', true)->take(3)->get();
        $programs = Program::where('is_active', true)->get();
        $waLink = $this->getWaLink($article->region);

        $kecamatanList = RegionService::getKecamatanForRegion($article->region ?? 'Indonesia');

        $waNumbers = [
            [
                'number' => '08118500177',
                'clean' => '628118500177',
                'title' => 'Hotline Konsultasi 1',
                'desc' => 'Informasi Jadwal & Kuota Pelatihan',
                'icon' => 'bi-headset'
            ],
            [
                'number' => '081399810272',
                'clean' => '6281399810272',
                'title' => 'Hotline Utama (Pendaftaran & Sertifikasi)',
                'desc' => 'Layanan Utama Pendaftaran & Standar Barantin',
                'icon' => 'bi-award-fill'
            ],
            [
                'number' => '087894580806',
                'clean' => '6287894580806',
                'title' => 'Hotline Konsultasi 3',
                'desc' => 'Silabus Teknis & Ujian Kompetensi',
                'icon' => 'bi-book-fill'
            ],
            [
                'number' => '087894580649',
                'clean' => '6287894580649',
                'title' => 'Hotline Konsultasi 4',
                'desc' => 'Kerjasama Perusahaan & In-House Training',
                'icon' => 'bi-buildings-fill'
            ],
        ];

        $articleFaqs = [
            [
                'q' => 'Apa saja persyaratan wajib untuk mengikuti pelatihan dan sertifikasi fumigasi di ' . ($article->region ?? 'wilayah ini') . '?',
                'a' => 'Persyaratan utama mencakup: KTP/identitas diri resmi, pas foto terbaru (latar merah), ijazah pendidikan minimal SLTA/sederajat atau D3/S1 untuk calon penanggung jawab teknis, surat tugas dari instansi/perusahaan tempat bekerja (apabila utusan perusahaan), serta surat keterangan sehat bebas gangguan pernapasan dari dokter untuk kelayakan praktik penggunaan SCBA.'
            ],
            [
                'q' => 'Apakah sertifikat pelatihan yang diterbitkan diakui oleh Badan Karantina Indonesia (Barantin) dan berstandar internasional?',
                'a' => 'Ya, materi pelatihan mengacu secara ketat pada regulasi Badan Karantina Indonesia, Standar Kelayakan Tempat Tindakan Karantina Tumbuhan, serta protokol internasional FAO ISPM 15 dan Australian Fumigation Accreditation Scheme (AFAS). Sertifikat kelulusan menjadi bukti kompetensi teknis formal fumigator teregistrasi.'
            ],
            [
                'q' => 'Gas fumigan apa saja yang dipelajari dan diujikan selama sesi pelatihan ini?',
                'a' => 'Pelatihan mencakup penanganan mendalam dua gas fumigan beracun utama perdagangan ekspor impor dunia: Fosfin (Phosphine / PH3) dalam bentuk tablet/pellet aluminium/magnesium fosfida untuk komoditas pangan, silo, ruang kedap; serta Metil Bromida (Methyl Bromide / CH3Br) untuk perlakuan kemasan kayu ISPM 15 dan perlakuan karantina pra-pengapalan.'
            ],
            [
                'q' => 'Bagaimana prosedur keselamatan kerja (K3) dan deteksi kebocoran gas yang dipraktikkan?',
                'a' => 'Peserta diwajibkan melakukan praktik hands-on pemakaian Self-Contained Breathing Apparatus (SCBA) dengan positive pressure, masker gas full-face dengan kanister spesifik gas fumigan, pengoperasian alat detektor elektronik (PID), colorimetric detector tube Dräger/Gastec, uji kebocoran tekanan (pressure decay test), dan evakuasi darurat First Aid.'
            ],
            [
                'q' => 'Berapa durasi pelatihan dan bagaimana jadwal pelaksanaan di ' . ($article->region ?? 'daerah terkait') . '?',
                'a' => 'Pelatihan intensif dilaksanakan selama 3 hingga 5 hari penuh, memadukan teori regulasi karantina di kelas, perhitungan dosis volumetrik matematis, dan praktik simulasi sungkup fumigasi di lapangan hingga tahap aerasi akhir.'
            ],
            [
                'q' => 'Bagaimana cara menghubungi admin untuk pendaftaran dan konsultasi langsung?',
                'a' => 'Anda dapat langsung menghubungi nomor WhatsApp resmi kami di 081399810272, 08118500177, 087894580806, atau 087894580649 untuk menerima silabus, jadwal batch terdekat, dan konfirmasi ketersediaan kuota.'
            ],
        ];

        return view('front.article-detail', compact('article', 'relatedArticles', 'programs', 'waLink', 'kecamatanList', 'waNumbers', 'articleFaqs'));
    }

    public function wilayahProvinsi($slug)
    {
        $province = RegionService::findProvince($slug);
        if (!$province) {
            abort(404, 'Provinsi tidak ditemukan');
        }

        $regionName = 'Provinsi ' . $province['name'];
        $programs = ProgramRegionService::getProgramsForRegion($regionName);
        $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $waLink = $this->getWaLink($regionName);

        return view('front.wilayah-provinsi', compact('province', 'programs', 'faqs', 'waLink', 'regionName'));
    }

    public function wilayahProvinsiProgramDetail($provinceSlug, $programSlug)
    {
        $province = RegionService::findProvince($provinceSlug);
        if (!$province) {
            abort(404, 'Provinsi tidak ditemukan');
        }

        $regionName = 'Provinsi ' . $province['name'];
        $program = ProgramRegionService::findMasterProgram($programSlug);
        if (!$program) {
            abort(404, 'Program pelatihan tidak ditemukan');
        }

        $articles = ProgramRegionService::getArticlesForProgram($programSlug, $regionName);

        $kecamatanList = RegionService::getKecamatanForRegion($regionName);
        $mapsUrl = RegionService::getMapUrl($regionName);
        $waLink = $this->getWaLink($regionName, $program['title']);

        $waNumbers = [
            [
                'number' => '08118500177',
                'clean' => '628118500177',
                'title' => 'Hotline Konsultasi 1',
                'desc' => 'Informasi Jadwal & Kuota Pelatihan',
                'icon' => 'bi-headset'
            ],
            [
                'number' => '081399810272',
                'clean' => '6281399810272',
                'title' => 'Hotline Utama (Pendaftaran & Sertifikasi)',
                'desc' => 'Layanan Utama Pendaftaran & Standar Barantin',
                'icon' => 'bi-award-fill'
            ],
            [
                'number' => '087894580806',
                'clean' => '6287894580806',
                'title' => 'Hotline Konsultasi 3',
                'desc' => 'Silabus Teknis & Ujian Kompetensi',
                'icon' => 'bi-book-fill'
            ],
            [
                'number' => '087894580649',
                'clean' => '6287894580649',
                'title' => 'Hotline Konsultasi 4',
                'desc' => 'Kerjasama Perusahaan & In-House Training',
                'icon' => 'bi-buildings-fill'
            ],
        ];

        $articleFaqs = [
            [
                'q' => 'Apa saja persyaratan wajib untuk mengikuti ' . $program['title'] . ' di ' . $regionName . '?',
                'a' => 'Persyaratan utama mencakup: KTP/identitas diri resmi, pas foto terbaru (latar merah), ijazah pendidikan minimal SLTA/sederajat atau D3/S1 untuk calon penanggung jawab teknis, surat tugas dari instansi/perusahaan tempat bekerja (apabila utusan perusahaan), serta surat keterangan sehat bebas gangguan pernapasan dari dokter untuk kelayakan praktik penggunaan SCBA.'
            ],
            [
                'q' => 'Apakah sertifikat pelatihan yang diterbitkan diakui oleh Badan Karantina Indonesia (Barantin) dan berstandar internasional?',
                'a' => 'Ya, kurikulum ' . $program['title'] . ' mengacu secara ketat pada regulasi Badan Karantina Indonesia, Standar Kelayakan Tempat Tindakan Karantina Tumbuhan, serta protokol internasional FAO ISPM 15 dan Australian Fumigation Accreditation Scheme (AFAS). Sertifikat kelulusan menjadi bukti kompetensi teknis formal fumigator teregistrasi.'
            ],
            [
                'q' => 'Gas fumigan apa saja yang dipelajari dan diujikan selama sesi pelatihan di ' . $regionName . ' ini?',
                'a' => 'Pelatihan mencakup penanganan mendalam dua gas fumigan beracun utama perdagangan ekspor impor dunia: Fosfin (Phosphine / PH3) dalam bentuk tablet/pellet aluminium/magnesium fosfida untuk komoditas pangan, silo, ruang kedap; serta Metil Bromida (Methyl Bromide / CH3Br) untuk perlakuan kemasan kayu ISPM 15 dan perlakuan karantina pra-pengapalan.'
            ],
            [
                'q' => 'Bagaimana prosedur keselamatan kerja (K3) dan deteksi kebocoran gas yang dipraktikkan?',
                'a' => 'Peserta diwajibkan melakukan praktik hands-on pemakaian Self-Contained Breathing Apparatus (SCBA) dengan positive pressure, masker gas full-face dengan kanister spesifik gas fumigan, pengoperasian alat detektor elektronik (PID), colorimetric detector tube Dräger/Gastec, uji kebocoran tekanan (pressure decay test), dan evakuasi darurat First Aid.'
            ],
            [
                'q' => 'Berapa durasi pelatihan dan bagaimana jadwal pelaksanaan di ' . $regionName . '?',
                'a' => 'Pelatihan intensif dilaksanakan selama ' . ($program['duration'] ?? '3 hingga 5 hari') . ', memadukan teori regulasi karantina di kelas, perhitungan dosis volumetrik matematis, dan praktik simulasi sungkup fumigasi di lapangan hingga tahap aerasi akhir.'
            ],
            [
                'q' => 'Bagaimana cara menghubungi admin untuk pendaftaran dan konsultasi langsung?',
                'a' => 'Anda dapat langsung menghubungi nomor WhatsApp resmi kami di 081399810272 (Hotline Utama), 08118500177, 087894580806, atau 087894580649 untuk menerima silabus lengkap, jadwal batch terdekat di ' . $regionName . ', dan konfirmasi ketersediaan kuota.'
            ],
        ];

        $otherPrograms = ProgramRegionService::getProgramsForRegion($regionName);

        return view('front.program-region-detail', compact(
            'province',
            'regionName',
            'program',
            'articles',
            'kecamatanList',
            'mapsUrl',
            'waLink',
            'waNumbers',
            'articleFaqs',
            'otherPrograms'
        ));
    }

    public function wilayahProvinsiProgramArticleDetail($provinceSlug, $programSlug, $articleSlug)
    {
        $province = RegionService::findProvince($provinceSlug);
        if (!$province) {
            abort(404, 'Provinsi tidak ditemukan');
        }

        $regionName = 'Provinsi ' . $province['name'];
        $program = ProgramRegionService::findMasterProgram($programSlug);
        if (!$program) {
            abort(404, 'Program pelatihan tidak ditemukan');
        }

        $article = ProgramRegionService::getOrGenerateArticleBySlug($programSlug, $articleSlug, $regionName);
        $article->increment('views');

        $allArticles = ProgramRegionService::getArticlesForProgram($programSlug, $regionName);
        $kecamatanList = RegionService::getKecamatanForRegion($regionName);
        $mapsUrl = RegionService::getMapUrl($regionName);
        $waLink = $this->getWaLink($regionName, $article->title);

        $waNumbers = [
            ['number' => '08118500177', 'clean' => '628118500177', 'title' => 'Hotline Konsultasi 1', 'desc' => 'Informasi Jadwal & Kuota Pelatihan', 'icon' => 'bi-headset'],
            ['number' => '081399810272', 'clean' => '6281399810272', 'title' => 'Hotline Utama (Pendaftaran & Sertifikasi)', 'desc' => 'Layanan Utama Pendaftaran & Standar Barantin', 'icon' => 'bi-award-fill'],
            ['number' => '087894580806', 'clean' => '6287894580806', 'title' => 'Hotline Konsultasi 3', 'desc' => 'Silabus Teknis & Ujian Kompetensi', 'icon' => 'bi-book-fill'],
            ['number' => '087894580649', 'clean' => '6287894580649', 'title' => 'Hotline Konsultasi 4', 'desc' => 'Kerjasama Perusahaan & In-House Training', 'icon' => 'bi-buildings-fill'],
        ];

        $articleFaqs = [
            ['q' => 'Apa cakupan materi dan kompetensi di dalam ' . $article->title . ' ini?', 'a' => 'Artikel panduan dan silabus ini mengupas tuntas standar operasional prosedur (SOP) perlakuan fumigasi, kepatuhan K3 bahan kimia berbahaya B3, regulasi karantina tumbuhan Badan Karantina Indonesia, standar FAO ISPM 15, dan skema akreditasi AFAS untuk wilayah ' . $regionName . '.'],
            ['q' => 'Apakah materi ini dapat dipelajari mandiri sebelum kelas pelatihan tatap muka/lapangan dimulai?', 'a' => 'Ya, seluruh peserta terdaftar diberikan modul dan materi panduan ini sebagai bahan pra-pelatihan (pre-reading) agar siap mengikuti ujian tertulis, simulasi pemasangan sungkup gas, serta ujian praktik penggunaan SCBA.'],
            ['q' => 'Bagaimana pengakuan sertifikasi yang diperoleh setelah menyelesaikan pelatihan ini?', 'a' => 'Sertifikat kompetensi yang diterbitkan diakui oleh otoritas karantina dan instansi terkait, menjadi bukti sah kualifikasi teknis fumigator teregistrasi dan penanggung jawab perlakuan ekspor.'],
            ['q' => 'Berapa durasi dan sistem pembinaan yang diterapkan di ' . $regionName . '?', 'a' => 'Pembinaan diselenggarakan intensif selama 3 hingga 5 hari kerja memadukan sesi teori di kelas, workshop perhitungan dosis volume, dan praktik simulasi nyata di lapangan hingga uji deteksi gas sisa (aerasi).'],
            ['q' => 'Bagaimana cara mendaftar atau mengundang instruktur untuk in-house training di ' . $regionName . '?', 'a' => 'Hubungi langsung hotline resmi WhatsApp kami di 081399810272 (Hotline Utama) atau 08118500177 untuk konsultasi jadwal, silabus, dan penyesuaian kebutuhan industri Anda.'],
        ];

        return view('front.program-article-detail', compact(
            'province',
            'regionName',
            'program',
            'article',
            'allArticles',
            'kecamatanList',
            'mapsUrl',
            'waLink',
            'waNumbers',
            'articleFaqs'
        ));
    }

    public function wilayahKabkot($provinceSlug, $kabkotSlug)
    {
        $data = RegionService::findKabkot($provinceSlug, $kabkotSlug);
        if (!$data) {
            abort(404, 'Kabupaten/Kota tidak ditemukan');
        }

        $province = $data['province'];
        $kabkotName = $data['name'];
        $kecamatanList = $data['kecamatan'];

        $programs = ProgramRegionService::getProgramsForRegion($kabkotName);
        $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();
        $waLink = $this->getWaLink($kabkotName);

        return view('front.wilayah-kabkot', compact('province', 'kabkotName', 'kabkotSlug', 'kecamatanList', 'programs', 'faqs', 'waLink'));
    }

    public function wilayahKabkotProgramDetail($provinceSlug, $kabkotSlug, $programSlug)
    {
        $data = RegionService::findKabkot($provinceSlug, $kabkotSlug);
        if (!$data) {
            abort(404, 'Kabupaten/Kota tidak ditemukan');
        }

        $province = $data['province'];
        $kabkotName = $data['name'];
        $regionName = $kabkotName;

        $program = ProgramRegionService::findMasterProgram($programSlug);
        if (!$program) {
            abort(404, 'Program pelatihan tidak ditemukan');
        }

        $articles = ProgramRegionService::getArticlesForProgram($programSlug, $regionName);

        $kecamatanList = $data['kecamatan'] ?? RegionService::getKecamatanForRegion($regionName);
        $mapsUrl = RegionService::getMapUrl($regionName);
        $waLink = $this->getWaLink($regionName, $program['title']);

        $waNumbers = [
            [
                'number' => '08118500177',
                'clean' => '628118500177',
                'title' => 'Hotline Konsultasi 1',
                'desc' => 'Informasi Jadwal & Kuota Pelatihan',
                'icon' => 'bi-headset'
            ],
            [
                'number' => '081399810272',
                'clean' => '6281399810272',
                'title' => 'Hotline Utama (Pendaftaran & Sertifikasi)',
                'desc' => 'Layanan Utama Pendaftaran & Standar Barantin',
                'icon' => 'bi-award-fill'
            ],
            [
                'number' => '087894580806',
                'clean' => '6287894580806',
                'title' => 'Hotline Konsultasi 3',
                'desc' => 'Silabus Teknis & Ujian Kompetensi',
                'icon' => 'bi-book-fill'
            ],
            [
                'number' => '087894580649',
                'clean' => '6287894580649',
                'title' => 'Hotline Konsultasi 4',
                'desc' => 'Kerjasama Perusahaan & In-House Training',
                'icon' => 'bi-buildings-fill'
            ],
        ];

        $articleFaqs = [
            [
                'q' => 'Apa saja persyaratan wajib untuk mengikuti ' . $program['title'] . ' di ' . $regionName . '?',
                'a' => 'Persyaratan utama mencakup: KTP/identitas diri resmi, pas foto terbaru (latar merah), ijazah pendidikan minimal SLTA/sederajat atau D3/S1 untuk calon penanggung jawab teknis, surat tugas dari instansi/perusahaan tempat bekerja (apabila utusan perusahaan), serta surat keterangan sehat bebas gangguan pernapasan dari dokter untuk kelayakan praktik penggunaan SCBA.'
            ],
            [
                'q' => 'Apakah sertifikat pelatihan yang diterbitkan diakui oleh Badan Karantina Indonesia (Barantin) dan berstandar internasional?',
                'a' => 'Ya, kurikulum ' . $program['title'] . ' mengacu secara ketat pada regulasi Badan Karantina Indonesia, Standar Kelayakan Tempat Tindakan Karantina Tumbuhan, serta protokol internasional FAO ISPM 15 dan Australian Fumigation Accreditation Scheme (AFAS). Sertifikat kelulusan menjadi bukti kompetensi teknis formal fumigator teregistrasi.'
            ],
            [
                'q' => 'Gas fumigan apa saja yang dipelajari dan diujikan selama sesi pelatihan di ' . $regionName . ' ini?',
                'a' => 'Pelatihan mencakup penanganan mendalam dua gas fumigan beracun utama perdagangan ekspor impor dunia: Fosfin (Phosphine / PH3) dalam bentuk tablet/pellet aluminium/magnesium fosfida untuk komoditas pangan, silo, ruang kedap; serta Metil Bromida (Methyl Bromide / CH3Br) untuk perlakuan kemasan kayu ISPM 15 dan perlakuan karantina pra-pengapalan.'
            ],
            [
                'q' => 'Bagaimana prosedur keselamatan kerja (K3) dan deteksi kebocoran gas yang dipraktikkan?',
                'a' => 'Peserta diwajibkan melakukan praktik hands-on pemakaian Self-Contained Breathing Apparatus (SCBA) dengan positive pressure, masker gas full-face dengan kanister spesifik gas fumigan, pengoperasian alat detektor elektronik (PID), colorimetric detector tube Dräger/Gastec, uji kebocoran tekanan (pressure decay test), dan evakuasi darurat First Aid.'
            ],
            [
                'q' => 'Berapa durasi pelatihan dan bagaimana jadwal pelaksanaan di ' . $regionName . '?',
                'a' => 'Pelatihan intensif dilaksanakan selama ' . ($program['duration'] ?? '3 hingga 5 hari') . ', memadukan teori regulasi karantina di kelas, perhitungan dosis volumetrik matematis, dan praktik simulasi sungkup fumigasi di lapangan hingga tahap aerasi akhir.'
            ],
            [
                'q' => 'Bagaimana cara menghubungi admin untuk pendaftaran dan konsultasi langsung?',
                'a' => 'Anda dapat langsung menghubungi nomor WhatsApp resmi kami di 081399810272 (Hotline Utama), 08118500177, 087894580806, atau 087894580649 untuk menerima silabus lengkap, jadwal batch terdekat di ' . $regionName . ', dan konfirmasi ketersediaan kuota.'
            ],
        ];

        $otherPrograms = ProgramRegionService::getProgramsForRegion($regionName);

        return view('front.program-region-detail', compact(
            'province',
            'kabkotName',
            'kabkotSlug',
            'regionName',
            'program',
            'articles',
            'kecamatanList',
            'mapsUrl',
            'waLink',
            'waNumbers',
            'articleFaqs',
            'otherPrograms'
        ));
    }

    public function wilayahKabkotProgramArticleDetail($provinceSlug, $kabkotSlug, $programSlug, $articleSlug)
    {
        $data = RegionService::findKabkot($provinceSlug, $kabkotSlug);
        if (!$data) {
            abort(404, 'Kabupaten/Kota tidak ditemukan');
        }

        $province = $data['province'];
        $kabkotName = $data['name'];
        $regionName = $kabkotName;

        $program = ProgramRegionService::findMasterProgram($programSlug);
        if (!$program) {
            abort(404, 'Program pelatihan tidak ditemukan');
        }

        $article = ProgramRegionService::getOrGenerateArticleBySlug($programSlug, $articleSlug, $regionName);
        $article->increment('views');

        $allArticles = ProgramRegionService::getArticlesForProgram($programSlug, $regionName);
        $kecamatanList = $data['kecamatan'] ?? RegionService::getKecamatanForRegion($regionName);
        $mapsUrl = RegionService::getMapUrl($regionName);
        $waLink = $this->getWaLink($regionName, $article->title);

        $waNumbers = [
            ['number' => '08118500177', 'clean' => '628118500177', 'title' => 'Hotline Konsultasi 1', 'desc' => 'Informasi Jadwal & Kuota Pelatihan', 'icon' => 'bi-headset'],
            ['number' => '081399810272', 'clean' => '6281399810272', 'title' => 'Hotline Utama (Pendaftaran & Sertifikasi)', 'desc' => 'Layanan Utama Pendaftaran & Standar Barantin', 'icon' => 'bi-award-fill'],
            ['number' => '087894580806', 'clean' => '6287894580806', 'title' => 'Hotline Konsultasi 3', 'desc' => 'Silabus Teknis & Ujian Kompetensi', 'icon' => 'bi-book-fill'],
            ['number' => '087894580649', 'clean' => '6287894580649', 'title' => 'Hotline Konsultasi 4', 'desc' => 'Kerjasama Perusahaan & In-House Training', 'icon' => 'bi-buildings-fill'],
        ];

        $articleFaqs = [
            ['q' => 'Apa cakupan materi dan kompetensi di dalam ' . $article->title . ' ini?', 'a' => 'Artikel panduan dan silabus ini mengupas tuntas standar operasional prosedur (SOP) perlakuan fumigasi, kepatuhan K3 bahan kimia berbahaya B3, regulasi karantina tumbuhan Badan Karantina Indonesia, standar FAO ISPM 15, dan skema akreditasi AFAS untuk wilayah ' . $regionName . '.'],
            ['q' => 'Apakah materi ini dapat dipelajari mandiri sebelum kelas pelatihan tatap muka/lapangan dimulai?', 'a' => 'Ya, seluruh peserta terdaftar diberikan modul dan materi panduan ini sebagai bahan pra-pelatihan (pre-reading) agar siap mengikuti ujian tertulis, simulasi pemasangan sungkup gas, serta ujian praktik penggunaan SCBA.'],
            ['q' => 'Bagaimana pengakuan sertifikasi yang diperoleh setelah menyelesaikan pelatihan ini?', 'a' => 'Sertifikat kompetensi yang diterbitkan diakui oleh otoritas karantina dan instansi terkait, menjadi bukti sah kualifikasi teknis fumigator teregistrasi dan penanggung jawab perlakuan ekspor.'],
            ['q' => 'Berapa durasi dan sistem pembinaan yang diterapkan di ' . $regionName . '?', 'a' => 'Pembinaan diselenggarakan intensif selama 3 hingga 5 hari kerja memadukan sesi teori di kelas, workshop perhitungan dosis volume, dan praktik simulasi nyata di lapangan hingga uji deteksi gas sisa (aerasi).'],
            ['q' => 'Bagaimana cara mendaftar atau mengundang instruktur untuk in-house training di ' . $regionName . '?', 'a' => 'Hubungi langsung hotline resmi WhatsApp kami di 081399810272 (Hotline Utama) atau 08118500177 untuk konsultasi jadwal, silabus, dan penyesuaian kebutuhan industri Anda.'],
        ];

        return view('front.program-article-detail', compact(
            'province',
            'kabkotName',
            'kabkotSlug',
            'regionName',
            'program',
            'article',
            'allArticles',
            'kecamatanList',
            'mapsUrl',
            'waLink',
            'waNumbers',
            'articleFaqs'
        ));
    }

    public function contact()
    {
        $programs = Program::where('is_active', true)->get();
        $provinces = RegionService::getProvinces();
        $waLink = $this->getWaLink();

        return view('front.contact', compact('programs', 'provinces', 'waLink'));
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:30',
            'company' => 'nullable|string|max:150',
            'region' => 'nullable|string|max:100',
            'program_id' => 'nullable|exists:programs,id',
            'message' => 'required|string|max:2000',
        ]);

        ContactMessage::create($validated);

        return redirect()->back()->with('success', 'Terima kasih! Pesan dan permohonan konsultasi Anda telah berhasil dikirim. Tim kami akan segera menghubungi Anda.');
    }
}
