<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        // Truncate to ensure clean database
        Article::truncate();

        $services = [
            [
                'id' => 'ispm15_wood',
                'title_prefix' => 'Training Fumigasi Standar Kemasan Kayu ISPM 15 dan Sertifikasi Marka Ekspor',
                'category' => 'Regulasi & Standar Ekspor',
                'author' => 'Dr. Ir. Hendra Saputra, M.Si & Tim Instruktur Karantina',
                'reading_time' => '45 Menit (Panduan Lengkap)',
                'service_name' => 'Fumigasi Kemasan Kayu Standar ISPM 15',
                'target_pest' => 'Kumbang Penggerek Kayu (Famili Bostrichidae, Cerambycidae, dan Scolytinae)',
                'chemical' => 'Metil Bromida (CH3Br)',
                'focus' => 'perlakuan kemasan kayu, palet kayu ekspor, dunnage penyangga muatan kapal, dan pembubuhan marka stempel resmi IPPC',
            ],
            [
                'id' => 'afas_australia',
                'title_prefix' => 'Training Fumigasi Akreditasi Standar AFAS Karantina Ekspor Australia',
                'category' => 'Regulasi & Standar Ekspor',
                'author' => 'Ir. Bambang Trihatmojo, M.Sc & Dewan Ahli Biosekuriti',
                'reading_time' => '46 Menit (Panduan Lengkap)',
                'service_name' => 'Fumigasi Akreditasi Skema AFAS Australia',
                'target_pest' => 'Hama Karantina Tumbuhan Invasif (Trogoderma granarium & OPTK Biosekuriti DAFF)',
                'chemical' => 'Metil Bromida Berstandar AFAS (Konsentrasi Multititik)',
                'focus' => 'protokol bilateral Badan Karantina Indonesia dan DAFF Australia, pemantauan konsentrasi multi-titik (Top, Middle, Bottom), dan uji peluruhan tekanan',
            ],
            [
                'id' => 'phosphine_silo',
                'title_prefix' => 'Training Fumigasi Teknik Fosfin Silo dan Gudang Pangan Skala Industri',
                'category' => 'Teknologi & Manajemen Hama',
                'author' => 'Bambang Irawan, S.P & Tim Proteksi Pascapanen Pangan',
                'reading_time' => '44 Menit (Panduan Lengkap)',
                'service_name' => 'Fumigasi Fosfin Silo dan Pergudangan Pangan Curah',
                'target_pest' => 'Sitophilus oryzae, Tribolium castaneum, dan Rhyzopertha dominica',
                'chemical' => 'Fosfin (Aluminium Fosfida / Magnesium Fosfida - PH3)',
                'focus' => 'perlakuan komoditas serealia dalam silo vertikal, gudang flat storage, mitigasi risiko peledakan gas, dan pemerataan konsentrasi gas jangka panjang',
            ],
            [
                'id' => 'ship_vessel',
                'title_prefix' => 'Training Fumigasi Prosedur Palka Kapal Kargo dan Pengapalan Curah Maritim',
                'category' => 'Teknologi & Manajemen Hama',
                'author' => 'Capt. H. Firmansyah, M.Mar & Tim Karantina Pelabuhan Laut',
                'reading_time' => '47 Menit (Panduan Lengkap)',
                'service_name' => 'Fumigasi Palka Kapal (Ship Hold Fumigation)',
                'target_pest' => 'Hama Penggerek Biji-Bijian Curah dan Serangga Palka Kapal',
                'chemical' => 'Fosfin In-Transit & Metil Bromida Pra-Pelayaran',
                'focus' => 'keselamatan pelayaran internasional (SOLAS & IMO), penutupan palka kedap air/gas, fumigasi dalam pelayaran (in-transit), serta degassing di pelabuhan tujuan',
            ],
            [
                'id' => 'container_fcl_lcl',
                'title_prefix' => 'Training Fumigasi Tata Cara Kontainer Ekspor FCL dan LCL Pelabuhan',
                'category' => 'Regulasi & Standar Ekspor',
                'author' => 'Agus Priyono, S.T, M.M & Tim Logistik Kontainer Pelabuhan',
                'reading_time' => '43 Menit (Panduan Lengkap)',
                'service_name' => 'Fumigasi Kontainer Petikemas (FCL / LCL)',
                'target_pest' => 'Hama Karantina Media Pembawa pada Petikemas Tertutup',
                'chemical' => 'Metil Bromida dan Fosfin Sistem Injeksi Cepat',
                'focus' => 'penyegelan celah pintu petikemas, pengetesan integritas karet seal, pemasangan sampling line, serta penerbitan Sertifikat Bebas Gas (Gas-Free)',
            ],
            [
                'id' => 'tarpaulin_sheet',
                'title_prefix' => 'Training Fumigasi Teknis Sungkup Terpal Kedap Gas Ruang Terbuka',
                'category' => 'Teknologi & Manajemen Hama',
                'author' => 'Ir. Gunawan Santoso, M.Si & Tim Aplikator Lapangan',
                'reading_time' => '42 Menit (Panduan Lengkap)',
                'service_name' => 'Fumigasi Sungkup Terpal (Sheet / Stack Fumigation)',
                'target_pest' => 'Hama Gudang Sekunder dan Serangga Perusak Tumpukan Karung',
                'chemical' => 'Terpal Gas-Proof Multilayer & Gas Fumigan Bertekanan',
                'focus' => 'teknik pelipatan terpal kedap gas, peletakan kantong pasir pemberat (sand snake) ganda, proteksi sudut tajam palet, dan distribusi gas seragam',
            ],
            [
                'id' => 'archive_library',
                'title_prefix' => 'Training Fumigasi Preservasi Dokumen Arsip Bersejarah dan Koleksi Perpustakaan',
                'category' => 'Teknologi & Manajemen Hama',
                'author' => 'Dra. Sri Wahyuni, M.Hum & Tim Preservasi Arsip Nasional',
                'reading_time' => '41 Menit (Panduan Lengkap)',
                'service_name' => 'Fumigasi Dokumen Berharga, Buku & Arsip Negara',
                'target_pest' => 'Kutu Buku (Lepisma saccharina), Rayap Kering (Cryptotermes), dan Jamur Kertas',
                'chemical' => 'Fosfin Dosis Rendah Terkendali & Modifikasi Atmosfer Nitrogen/CO2',
                'focus' => 'pencegahan degradasi kertas selulosa, perlindungan tinta kuno dan jilid kulit, sterilisasi spora jamur, dan sirkulasi pembersihan gas tanpa residu korosif',
            ],
            [
                'id' => 'feedmill_flourmill',
                'title_prefix' => 'Training Fumigasi Sanitasi Pabrik Pakan Ternak dan Industri Pengolahan Tepung',
                'category' => 'Teknologi & Manajemen Hama',
                'author' => 'Dr. Ir. Budi Darmawan, M.Tech & Konsultan Industri Pangan',
                'reading_time' => '45 Menit (Panduan Lengkap)',
                'service_name' => 'Fumigasi Struktural Pabrik Pakan (Feedmill) & Penggilingan Tepung',
                'target_pest' => 'Ephestia kuehniella (Ngengat Tepung) dan Tribolium confusum',
                'chemical' => 'Fumigasi Total Struktural (Space Treatment) Kombinasi Aerosol & Gas',
                'focus' => 'penyegelan elevator mesin, saluran ducting, pembersihan dead spaces sebelum fumigasi, dan kepatuhan standar keamanan pangan HACCP/ISO 22000',
            ],
            [
                'id' => 'tobacco_beetle',
                'title_prefix' => 'Training Fumigasi Pengendalian Hama Gudang Tembakau dan Komoditas Daun Kering',
                'category' => 'Teknologi & Manajemen Hama',
                'author' => 'Ir. Joko Susilo, M.Agr & Tim Peneliti Komoditas Perkebunan',
                'reading_time' => '43 Menit (Panduan Lengkap)',
                'service_name' => 'Fumigasi Tembakau Cerutu dan Daun Rempah Kering',
                'target_pest' => 'Kumbang Tembakau (Lasioderma serricorne) dan Ngengat Tembakau',
                'chemical' => 'Fosfin Formulasi Magnesium Fosfida (Bebas Amonia)',
                'focus' => 'menjaga cita rasa khas dan elastisitas lembar tembakau, eliminasi telur hama di dalam bal kemasan padat, dan monitoring feromon pasca-fumigasi',
            ],
            [
                'id' => 'k3_scba_safety',
                'title_prefix' => 'Training Fumigasi Keselamatan Kerja K3 Gas Beracun dan Pengoperasian SCBA Fumigator',
                'category' => 'Keselamatan Kerja (K3) B3',
                'author' => 'Ir. Suryadi Wibowo, ST, M.KKK & Dewan Ahli K3 Kimia Nasional',
                'reading_time' => '46 Menit (Panduan Lengkap)',
                'service_name' => 'Pelatihan K3 Kimia Gas B3 dan Pengoperasian SCBA',
                'target_pest' => 'Mitigasi Bahaya Keracunan Gas Fumigan Akut & Kronis',
                'chemical' => 'Peralatan SCBA Bertekanan Positif & Tabung Detektor Gas Spesifik',
                'focus' => 'protokol perlindungan nyawa fumigator, uji kedap masker (fit test), perhitungan konsumsi udara tabung SCBA, zonasi perimeter bahaya, dan evakuasi gawat darurat',
            ],
            [
                'id' => 'barantin_quarantine',
                'title_prefix' => 'Training Fumigasi Kepatuhan Tindakan Karantina Tumbuhan Barantin Pra-Pengapalan',
                'category' => 'Regulasi & Standar Ekspor',
                'author' => 'Dr. H. Rusdiansyah, M.Si & Dewan Kebijakan Karantina Indonesia',
                'reading_time' => '45 Menit (Panduan Lengkap)',
                'service_name' => 'Fumigasi Karantina Tumbuhan Barantin Pra-Pengapalan',
                'target_pest' => 'Organisme Pengganggu Tumbuhan Karantina (OPTK Golongan I & II)',
                'chemical' => 'Fumigan Registrasi Badan Karantina Indonesia',
                'focus' => 'alur verifikasi tindakan karantina resmi, penerbitan Phytosanitary Certificate, kepatuhan tempat tindakan karantina (TTK), dan integrasi sistem e-Phyto Barantin',
            ],
            [
                'id' => 'jsystem_recirculation',
                'title_prefix' => 'Training Fumigasi Instalasi Resirkulasi Gas J-System dan Efisiensi Fumigan',
                'category' => 'Teknologi & Manajemen Hama',
                'author' => 'Eng. Denny Mahendra, S.T & Tim Rekayasa Termodinamika Gas',
                'reading_time' => '44 Menit (Panduan Lengkap)',
                'service_name' => 'Sistem Resirkulasi Gas Terpaksa (J-System Recirculation)',
                'target_pest' => 'Serangga Hama di Seluruh Ketinggian Struktur Silo Tinggi',
                'chemical' => 'Fosfin dengan Sirkulasi Saluran Pipa Loop Tertutup',
                'focus' => 'instalasi pipa resirkulasi eksternal, blower berdaya dorong spesifik, pencegahan stratifikasi gas berat, dan percepatan waktu ekuilibrium konsentrasi racun',
            ],
            [
                'id' => 'spices_coffee_cocoa',
                'title_prefix' => 'Training Fumigasi Pascapanen Komoditas Biji Kopi Kakao dan Rempah Ekspor',
                'category' => 'Teknologi & Manajemen Hama',
                'author' => 'Ir. Muhammad Ridwan, M.P & Tim Mutu Ekspor Rempah Nusantara',
                'reading_time' => '45 Menit (Panduan Lengkap)',
                'service_name' => 'Fumigasi Komoditas Ekspor Kopi, Kakao & Rempah Organik',
                'target_pest' => 'Araecerus fasciculatus (Kumbang Kopi) dan Ephestia cautella',
                'chemical' => 'Fosfin Ramah Residu & Gas Ramah Lingkungan',
                'focus' => 'menjaga kadar air ideal (12%), mencegah risiko pembentukan mikotoksin ochratoxin A, mempertahankan aroma specialty coffee, serta kepatuhan batas residu maksimum (BMR/MRL)',
            ],
            [
                'id' => 'pressure_decay_test',
                'title_prefix' => 'Training Fumigasi Uji Peluruhan Tekanan Gas-Tightness Enclosure Ruang Fumigasi',
                'category' => 'Teknologi & Manajemen Hama',
                'author' => 'Taufik Hidayat, S.T, M.Eng & Tim Auditor Mutu Akreditasi',
                'reading_time' => '42 Menit (Panduan Lengkap)',
                'service_name' => 'Pengujian Kekedapan Enclosure (Pressure Decay Testing)',
                'target_pest' => 'Verifikasi Mutu Ruang Kedap Terhadap Seluruh Spesies Serangga',
                'chemical' => 'Manometer Digital Diferensial & Pompa Kompresi Udara',
                'focus' => 'standar uji peluruhan tekanan 10 detik dan 20 detik (standar AFAS), deteksi kebocoran mikro dengan cairan surfaktan, dan sertifikasi kelayakan ruang fumigasi',
            ],
            [
                'id' => 'pid_resistance_mgmt',
                'title_prefix' => 'Training Fumigasi Monitoring Gas Elektronik PID dan Manajemen Resistensi Fosfin',
                'category' => 'Teknologi & Manajemen Hama',
                'author' => 'Dr. Siti Nurhaliza, M.Biotech & Laboratorium Toksikologi Serangga',
                'reading_time' => '46 Menit (Panduan Lengkap)',
                'service_name' => 'Deteksi Gas Digital PID & Pengelolaan Resistensi Serangga',
                'target_pest' => 'Strain Serangga Resisten Genetik Fosfin (Strong Resistance)',
                'chemical' => 'Photoionization Detector (PID) & Multi-Gas Analyser',
                'focus' => 'kalibrasi sensor PID, pengujian resistensi genetik serangga metode FAO, strategi rotasi perlakuan dan kombinasi gas, serta pemetaan dosis kuratif tuntas',
            ],
        ];

        $cities = [
            [
                'name' => 'Kota Banda Aceh',
                'port' => 'Pelabuhan Malahayati dan Ulee Lheue',
                'commodities' => 'kopi arabika gayo, nilam, rempah-rempah, dan hasil hutan kayu',
                'geography' => 'pesisir utara ujung barat Sumatera yang berhadapan langsung dengan jalur pelayaran internasional Selat Malaka dan Samudera Hindia',
                'climate' => 'iklim tropis maritim dengan hembusan angin laut berkisar 12-25 km/jam dan kelembapan nisbi 75-88%',
                'profile' => 'gerbang utama logistik laut dan udara di ujung barat Indonesia dengan pengawasan karantina ketat oleh BKHIT / Barantin Satuan Pelayanan Banda Aceh',
            ],
            [
                'name' => 'Kota Langsa',
                'port' => 'Pelabuhan Kuala Langsa',
                'commodities' => 'kelapa sawit, karet olahan, kemasan kayu industri, komoditas laut beku, dan hasil pertanian lokal',
                'geography' => 'wilayah pesisir timur Provinsi Aceh yang menghubungkan simpul distribusi industri antara Banda Aceh dan Sumatera Utara',
                'climate' => 'zona tropis dataran rendah pesisir dengan temperatur harian 27 °C hingga 33 °C dan curah hujan khas pantai timur',
                'profile' => 'pusat perdagangan maritim dan kawasan pergudangan komoditas strategis yang berkembang pesat di lintas timur Sumatera',
            ],
            [
                'name' => 'Kota Medan',
                'port' => 'Pelabuhan Internasional Belawan dan Terminal Petikemas Belawan (BICT)',
                'commodities' => 'tembakau deli, minyak sawit mentah (CPO) dan turunannya, karet remah (crumb rubber), kopi mandheling/sidikalang, serta aneka kemasan kayu pallet ekspor',
                'geography' => 'metropolitan ekonomi terbesar di barat Indonesia yang terintegrasi langsung dengan Kawasan Industri Medan (KIM 1-4) dan Pelabuhan Belawan',
                'climate' => 'mikroklimat perkotaan industri tropis dengan kelembapan tinggi dan dinamika pergudangan logistik kontainer berskala gigantik',
                'profile' => 'episentrum perdagangan internasional terpadat di Sumatera dengan ratusan ribu TEUs kontainer ekspor per tahun di bawah pengawasan ketat Balai Besar Karantina',
            ],
        ];

        foreach ($cities as $cityData) {
            $cityName = $cityData['name'];

            foreach ($services as $service) {
                $title = "{$service['title_prefix']} di {$cityName}";
                $slug = Str::slug($title);

                $content = $this->generateFullArticleText($service, $cityData, $title);

                Article::create([
                    'title' => $title,
                    'slug' => $slug,
                    'category' => $service['category'],
                    'region' => $cityName,
                    'author' => $service['author'],
                    'reading_time' => $service['reading_time'],
                    'excerpt' => "Panduan operasional dan kurikulum resmi {$service['service_name']} di wilayah {$cityName}. Mencakup regulasi Barantin, protokol keselamatan K3, pengendalian {$service['target_pest']}, tata cara aplikasi {$service['chemical']}, serta evaluasi kompetensi.",
                    'content' => $content,
                    'is_published' => true,
                    'views' => rand(210, 680),
                    'published_at' => now()->subDays(rand(1, 14)),
                ]);
            }
        }
    }

    public function generateFullArticleText(array $service, array $city, string $title): string
    {
        $cityName = $city['name'];
        $port = $city['port'];
        $commodities = $city['commodities'];
        $geography = $city['geography'];
        $climate = $city['climate'];
        $profile = $city['profile'];

        $serviceName = $service['service_name'];
        $targetPest = $service['target_pest'];
        $chemical = $service['chemical'];
        $focus = $service['focus'];

        // BAB 1
        $c1 = "BAB 1: PENDAHULUAN DAN ARSITEKTUR LAYANAN {$serviceName} DI {$cityName}
Penyelenggaraan {$title} dirancang secara khusus untuk menjawab kebutuhan riil sektor logistik, pergudangan modern, dan rantai pasok ekspor yang berpusat di {$cityName}. Sebagai {$profile}, dinamika pergerakan barang komersial dan komoditas unggulan seperti {$commodities} menuntut standar proteksi biologis tertinggi dari ancaman infestasi hama gudang perusak maupun Organisme Pengganggu Tumbuhan Karantina (OPTK).

Karakteristik geografis {$cityName} yang berada pada {$geography} dengan kondisi iklim {$climate} menciptakan tantangan operasional yang sangat unik bagi praktisi pengendalian hama. Suhu hangat yang konstan mempercepat siklus reproduksi serangga dari telur hingga dewasa menjadi hanya 18 hingga 24 hari. Tanpa penanganan profesional berbasis fumigasi ilmiah, tumpukan komoditas di gudang-gudang simpanan {$cityName} dapat mengalami penyusutan bobot (shrinkage) hingga 15% - 30% serta penurunan grade kualitas yang memicu kerugian finansial bernilai ratusan juta rupiah.

Melalui pelatihan komprehensif ini, fokus utama diarahkan pada penguasaan teknologi {$focus}. Pelatihan ini membekali para personel penanggung jawab teknis, operator lapangan, supervisor pergudangan, dan eksportir di {$cityName} agar memiliki kualifikasi resmi berstandar Badan Karantina Indonesia serta memenuhi regulasi pasar ekspor internasional.";

        // BAB 2
        $c2 = "BAB 2: LANDASAN HUKUM, REGULASI BADAN KARANTINA INDONESIA, DAN PROTOKOL GLOBAL
Pelaksanaan operasional {$serviceName} di {$cityName} wajib bersandar pada hierarki perundang-undangan dan instrumen kepatuhan hukum yang mengikat:

1. Undang-Undang RI Nomor 21 Tahun 2019 tentang Karantina Hewan, Ikan, dan Tumbuhan:
Menegaskan bahwa setiap media pembawa hama yang dilalulintaskan antar-area atau diekspor dari {$cityName} melalui simpul pelabuhan {$port} wajib bebas dari hama target. Pelanggaran terhadap kepatuhan karantina dapat berakibat pada sanksi administratif berat, penahanan kargo, hingga tuntutan pidana kurungan dan denda perdata.

2. Regulasi Teknis Badan Karantina Indonesia (Barantin):
Mengatur standardisasi registrasi perusahaan fumigasi, keharusan kepemilikan Surat Izin Operasional, pengesahan Tempat Tindakan Karantina (TTK) berlisensi di {$cityName}, dan verifikasi integritas sertifikat perlakuan (Treatment Certificate) sebelum penerbitan sertifikat karantina tumbuhan (Phytosanitary Certificate).

3. Standardisasi Karantina Internasional IPPC FAO (ISPM 15 & ISPM 28):
Memberikan rujukan dosis minimum, waktu retensi gas, ambang batas kebocoran ruang penutup, dan larangan penggunaan bahan kimia perusak ozon yang tidak memiliki izin kuota resmi pra-pengapalan (Quarantine and Pre-Shipment / QPS).

4. Skema Akreditasi Bilateral (AFAS - Australian Fumigation Accreditation Scheme):
Menyediakan tata cara audit dokumentasi terintegrasi, kalibrasi instrumen monitoring berkala, dan kewajiban uji peluruhan tekanan (pressure decay test) untuk menjamin tingkat kekedapan gas di seluruh fasilitas perlakuan di {$cityName}.";

        // BAB 3
        $c3 = "BAB 3: BIOLOGI ENTOMOLOGI DAN IDENTIFIKASI HAMA SASARAN: {$targetPest}
Keberhasilan aplikasi {$serviceName} di {$cityName} sangat bergantung pada pemahaman komprehensif atas bioekologi hama sasaran utama, yaitu {$targetPest}:

1. Morfologi dan Siklus Hidup Serangga Hama:
Serangga sasaran di wilayah {$cityName} memiliki adaptasi fisiologis tinggi terhadap kelembapan tropis. Fase telur (ovum) dilindungi oleh lapisan korion tebal kedap air, sedangkan fase pupa bersembunyi di dalam kokon sutra atau struktur serat kayu/biji yang sulit ditembus insektisida kontak cair biasa. Molekul {$chemical} bekerja secara sistemik menembus sistem spirakel pernapasan serangga pada seluruh stadium metamorfosis.

2. Ambang Batas Kerusakan Ekonomi dan Deteksi Dini:
Di gudang-gudang {$cityName}, keberadaan serangga hidup sekecil apapun (zero tolerance) pada komoditas ekspor berpotensi menggugurkan sertifikasi fitosanitari. Tanda-tanda kerusakan awal meliputi timbulnya serbuk halus gerekan (frass), bercak perubahan warna komoditas, timbulnya bau asam/apek menyengat, serta peningkatan panas lokal (hot spots) akibat respirasi koloni serangga yang padat.

3. Fenomena Resistensi Genetik:
Penggunaan gas fumigan secara berulang dengan dosis sub-letal di masa lampau telah memicu timbulnya resistensi serangga di beberapa titik pergudangan. Pelatihan ini melatih peserta di {$cityName} untuk mengidentifikasi tingkat kerentanan hama dan menerapkan strategi pemutusan rantai resistensi melalui dosis kuratif tuntas serta pengelolaan sanitasi terpadu (Integrated Pest Management / IPM).";

        // BAB 4
        $c4 = "BAB 4: FISIKA TERMODINAMIKA GAS DAN SIFAT KIMIAWI BAHAN AKTIF: {$chemical}
Penguasaan sifat fisiko-kimia dari {$chemical} menjadi landasan fundamental keselamatan dan efektivitas teknisi di {$cityName}:

1. Karakteristik Molekuler dan Densitas Uap:
Gas fumigan memiliki berat jenis uap relatif terhadap udara atmosfer. Pemahaman mengenai apakah gas cenderung mengendap ke dasar lantai atau berdifusi seimbang ke segala arah menentukan penempatan kipas sirkulasi dan titik selang monitoring. Pada suhu lingkungan {$cityName} yang mencapai 28 °C - 32 °C, energi kinetik molekul meningkat, mempercepat laju difusi namun sekaligus meningkatkan laju pelepasan gas jika terdapat celah mikro pada sungkup penutup.

2. Daya Sorpsi dan Desorpsi Bahan Komoditas:
Komoditas yang disimpan di {$cityName} seperti {$commodities} memiliki karakteristik pori-pori internal dan kadar minyak/lemak yang berbeda-beda. Komoditas berkadar minyak tinggi cenderung menyerap (sorpsi) molekul gas lebih banyak pada jam-jam awal, sehingga dosis awal harus dikompensasi secara presisi agar konsentrasi gas bebas di udara enclosure tetap berada di atas ambang mematikan serangga sepanjang masa pemaparan.

3. Reaktivitas Kimia dan Perlindungan Aset:
Peserta diajarkan batas toleransi kontak gas dengan peralatan logam, sirkuit elektronik tembaga, dan kemasan plastik guna menghindari korosi atau kerusakan properti bernilai tinggi di lingkungan kerja {$cityName}.";

        // BAB 5
        $c5 = "BAB 5: KALKULASI MATEMATIS DOSIS, VOLUME ENCLOSURE, DAN KOREKSI TEMPERATUR
Perhitungan dosis fumigasi di {$cityName} menuntut akurasi matematis tanpa toleransi kesalahan pembulatan spekulatif:

1. Perhitungan Volume Bruto Enclosure (Ruang Sungkup):
Volume dihitung berdasarkan dimensi luar ruang tumpukan:
V = Panjang (m) x Lebar (m) x Tinggi (m)
Bila tumpukan memiliki bentuk tidak beraturan atau atap pelana gudang, perhitungan dibagi menjadi beberapa segmen geometris terpisah (prismatik dan trapesium).

2. Rumus Dosis Aplikasi Awal:
Kebutuhan Berat Gas (gram atau kg) = Volume Bruto (m³) x Dosis Standar (g/m³) x Faktor Koreksi Suhu dan Sorpsi
Pada suhu komoditas di {$cityName} (kategori suhu tropis > 21 °C), dosis standar disesuaikan dengan pedoman resmi Barantin dan skema AFAS untuk memastikan konsentrasi akhir jam ke-24 tetap memenuhi standar efikasi biologis.

3. Contoh Perhitungan Lapangan di {$cityName}:
Sebagai simulasi nyata, jika volume kargo kemasan kayu di kawasan {$port} adalah 350 m³ dengan suhu terukur 27 °C dan dosis standar 48 g/m³, maka total massa gas murni yang harus diinjeksikan adalah:
Total Gas = 350 m³ x 48 g/m³ = 16.800 gram = 16.8 kg.
Timbangan digital bersertifikat kalibrasi wajib digunakan untuk memantau penurunan bobot silinder gas selama proses pelepasan berlangsung.";

        // BAB 6
        $c6 = "BAB 6: KINETIKA PENETRASI GAS, DISTRIBUSI KONSENTRASI, DAN HUKUM DIFUSI FICK
Pemerataan gas di dalam ruang tertutup diatur oleh prinsip-prinsip difusi massa termodinamika:

1. Hukum Fick untuk Difusi Molekuler:
Laju fluks difusi gas berbanding lurus dengan gradien konsentrasi dan luas penampang pori komoditas. Dalam tumpukan kargo padat di {$cityName}, sirkulasi alami tanpa bantuan mekanis membutuhkan waktu lama untuk mencapai ekuilibrium. Hal ini dapat menyebabkan serangga di bagian tengah tumpukan tidak terpapar dosis mematikan tepat waktu.

2. Pengoperasian Kipas Sirkulasi Udara Terarah:
Peserta di {$cityName} dilatih menghitung kapasitas debit kipas blower (m³/menit) yang diperlukan untuk memutar seluruh volume udara enclosure minimal 3 hingga 5 kali siklus udara dalam 60 menit pertama pasca-injeksi, sehingga konsentrasi gas di titik sampling atas (Top), tengah (Middle), dan bawah (Bottom) mencapai deviasi kurang dari 15%.

3. Fenomena Stratifikasi dan Penanganan Kantong Udara Mati:
Pada enclosure berukuran besar di kawasan pergudangan {$cityName}, perbedaan suhu antara lantai beton yang dingin dan atap seng gudang yang panas dapat memicu arus konveksi yang memecah keseragaman gas. Penempatan baffle pembatas dan jalur distribusi selang injeksi multi-nozzle menjadi solusi rekayasa wajib yang dipraktikkan.";

        // BAB 7
        $c7 = "BAB 7: STANDAR OPERASIONAL PROSEDUR (SOP) TAHAP PERSIAPAN & PRA-FUMIGASI
Tahap persiapan menentukan 80% keberhasilan tindakan {$serviceName} di {$cityName}:

1. Analisis Keselamatan Kerja (Job Safety Analysis / JSA):
Sebelum perlakuan dimulai, tim pelaksana wajib mengidentifikasi seluruh potensi bahaya di lokasi {$cityName}, termasuk keberadaan instalasi listrik, jalur evakuasi darurat, arah angin dominan dari arah {$geography}, dan aktivitas pekerja gudang di sekitarnya.

2. Inspeksi Lantai dan Pemasangan Ground Sheet:
Lantai gudang atau dermaga di kawasan {$port} diperiksa secara seksama dari retakan, lubang drainase, atau pori beton kasar. Apabila lantai bersifat porous (merembeskan gas), lembaran alas kedap (ground sheet) wajib dibentangkan sebelum komoditas ditumpuk di atasnya.

3. Pemilihan dan Uji Fisik Terpal Kedap Gas (Gas-Proof Sheet):
Terpal penutup harus terbuat dari material polymer multilayer (seperti PVC atau polyethylene terlaminasi) dengan ketebalan minimal 200 mikron. Terpal diperiksa di bawah sinar lampu terang untuk memastikan tidak terdapat robekan jarum (pinholes). Sambungan antar-terpal wajib dilipat ganda (pigtail fold) dan dijepit dengan klem penjepit khusus setiap interval 50 cm.

4. Pemasangan Pematok dan Pemberat Pasir (Sand Snakes):
Kantong pemberat pasir berdiameter 10-15 cm diletakkan mengelilingi dasar terpal penutup. Sand snake ditata saling menindih (overlapping) minimal 30 cm dalam susunan ganda (double row) untuk memastikan tidak ada celah gas yang lolos menyusuri lantai kerja di {$cityName}.";

        // BAB 8
        $c8 = "BAB 8: SOP TAHAP PELEPASAN INJEKSI GAS, PEMANTAUAN MONITORING, DAN DOSIS TAMBAHAN
Fase kritis operasional {$serviceName} di {$cityName} dilaksanakan dengan kepatuhan tinggi pada protokol berikut:

1. Sterilisasi Zona Bahaya (Risk Area Perimeter):
Perimeter keselamatan minimal radius 10 hingga 15 meter dari dinding sungkup disterilkan dari seluruh personel tanpa wewenang. Pita barikade peringatan bahaya (danger tape) dan papan rambu bertuliskan 'BAHAYA GAS BERACUN - DILARANG MENDEKAT' berhuruf besar reflektif dipasang di setiap sisi akses menuju lokasi di {$cityName}.

2. Pengoperasian Alat Pemanas Uap (Vaporizer Unit):
Untuk gas cair bertekanan, pelepasan wajib melalui unit vaporizer bersirkulasi air panas dengan suhu konstan minimal 65 °C guna mencegah kondensasi cairan beku yang dapat merusak komoditas {$commodities} dan merobek selang injeksi akibat pembekuan mendadak.

3. Monitoring Konsentrasi Multi-Waktu:
Konsentrasi gas diukur menggunakan alat pengukur digital tertunjuk langsung (electronic gas monitor) yang telah dikalibrasi pada interval:
- Jam ke-2 pasca-injeksi: Untuk memverifikasi keseragaman distribusi gas.
- Jam ke-4 pasca-injeksi: Titik evaluasi kritis retensi gas. Apabila konsentrasi turun di bawah standar minimal, injeksi tambahan (top-up) wajib dilakukan segera.
- Jam ke-24 / Jam Akhir: Syarat penentu keabsahan perlakuan karantina sesuai regulasi Barantin di {$cityName}. Seluruh rekaman angka dicatat rapi dalam Lembar Logsheet Resmi bertandatangan Fumigator Berlisensi.";

        // BAB 9
        $c9 = "BAB 9: SOP TAHAP AERASI, PEMBERSIHAN GAS SISA (DEGASSING), DAN CLEARANCE TEST
Proses pengembalian area kerja ke kondisi aman (gas-free state) di {$cityName} membutuhkan kehati-hatian maksimal:

1. Penggunaan Alat Pelindung Pernapasan Mandiri (SCBA):
Dua orang fumigator bersertifikat wajib mengenakan unit SCBA bertekanan positif sebelum mendekati enclosure untuk memulai pembukaan terpal. Masker respirator tipe kanister filter dilarang keras digunakan pada fase ini karena konsentrasi gas awal masih sangat pekat.

2. Prosedur Pembukaan Terpal Bertahap:
Terpal dibuka secara bertahap dari sisi atas angin (upwind direction) dengan mempertimbangkan kecepatan angin di kawasan {$geography}. Blower pembuang udara (exhaust fan) diarahkan ke area terbuka yang tinggi, menjauhi kantor administrasi dan permukiman warga {$cityName}.

3. Pengujian Batas Bebas Gas (Gas-Free Clearance Testing):
Pengukuran konsentrasi sisa dilakukan di ruang antara komoditas menggunakan detektor gas sensitif tinggi (resolusi 0.1 ppm). Sertifikat Bebas Gas (Gas-Free Certificate) hanya boleh diterbitkan jika kadar gas sisa telah berada di bawah Nilai Ambang Batas (NAB / TLV-TWA):
- Metil Bromida: ≤ 1.0 ppm (atau 0.5 ppm sesuai standar terkini).
- Fosfin: ≤ 0.1 ppm.
Sebelum sertifikat ini ditandatangani, pintu kontainer atau gudang di {$cityName} dilarang keras dimasuki oleh buruh bongkar muat.";

        // BAB 10
        $c10 = "BAB 10: MANAJEMEN RESIDU PADAT, DEAKTIVASI LIMBAH B3, DAN KESELAMATAN LINGKUNGAN
Aspek kelestarian lingkungan hidup di {$cityName} menjadi bagian tak terpisahkan dari kurikulum pelatihan:

1. Pengumpulan Abu Residu Padat:
Untuk fumigasi menggunakan formulasi metal fosfida, sisa abu berwarna abu-abu yang mengandung aluminium hidroksida dan sisa partikel fosfida yang belum bereaksi dikumpulkan dalam wadah logam tahan karat berventilasi.

2. Prosedur Deaktivasi Basah (Wet Deactivation):
Residu abu padat dideaktivasi secara bertahap dengan menuangkannya ke dalam drum berisi larutan air sabun atau deterjen 2% di ruang terbuka berventilasi baik di wilayah {$cityName}. Reaksi ini menuntaskan penguraian sisa fosfida menjadi gas tidak beracun secara terkontrol tanpa risiko percikan api mendadak.

3. Kepatuhan Regulasi Pengelolaan Limbah B3 KemenLH:
Kemasan kaleng bekas silinder gas dan residu padat wajib dicatat dalam neraca limbah B3 perusahaan di {$cityName} dan diserahkan kepada pihak pengolah limbah B3 berizin resmi, mencegah pencemaran tanah dan sumber air minum masyarakat.";

        // BAB 11
        $c11 = "BAB 11: KESELAMATAN DAN KESEHATAN KERJA (K3), PRAKTIK SCBA, DAN TANGGAP DARURAT
Perlindungan jiwa manusia merupakan prioritas absolut dalam pembinaan teknisi di {$cityName}:

1. Toksikologi Klinis dan Gejala Keracunan Gas:
Gejala paparan akut gas fumigan meliputi pusing mendadak, sensasi terbakar pada mata dan tenggorokan, mual hebat, sesak napas, hingga edema paru dan kejang saraf. Peserta dilatih mengenali gejala awal pada rekan kerja (buddy system) saat berada di zona operasional {$cityName}.

2. Praktikum Hands-On Pengoperasian SCBA:
Setiap peserta wajib menjalani praktik individual pemakaian Self-Contained Breathing Apparatus:
- Pemeriksaan tekanan tabung silinder udara (minimal 270 - 300 bar).
- Uji tekanan positif dan uji kerapatan masker pada wajah (facepiece seal test).
- Uji fungsi peluit peringatan alarm tekanan rendah (low pressure warning whistle).
- Manajemen laju pernapasan saat bekerja di bawah tekanan fisik.

3. Protokol Tanggap Darurat dan Pertolongan Pertama (First Aid):
Instruksi evakuasi cepat korban ke udara segar di atas arah angin (upwind), pemberian bantuan oksigen murni medis, posisi pemulihan (recovery position), tata cara resusitasi jantung paru (CPR), serta koordinasi jalur rujukan medis ke instalasi gawat darurat rumah sakit terdekat di {$cityName}.";

        // BAB 12
        $c12 = "BAB 12: DOKUMENTASI MUTU, INTEGRITAS DATA, DAN VERIFIKASI SERTIFIKAT BARANTIN
Kredibilitas sertifikat fumigasi asal {$cityName} di mata pasar dunia ditentukan oleh tata kelola dokumentasi:

1. Struktur Lembar Kerja Lapangan (Fumigation Logsheet):
Logsheet resmi harus memuat identitas nomor registrasi perusahaan, nama komoditas {$commodities}, volume ruang enclosure, berat gas terinjeksi, rekaman suhu komoditas, grafik pembacaan konsentrasi tiap titik sampling, serta tanda tangan fumigator penanggung jawab teknis di {$cityName}.

2. Penerbitan Treatment Certificate Resmi:
Sertifikat perlakuan diterbitkan dengan nomor seri unik terintegrasi yang mencantumkan rincian perlakuan, tanggal exposure, masa aerasi, dan batas kedaluwarsa perlakuan sesuai ketentuan karantina negara tujuan ekspor.

3. Audit Kepatuhan dan Sistem Traceability e-Phyto:
Data perlakuan di {$cityName} siap ditautkan dengan platform verifikasi karantina digital Badan Karantina Indonesia guna mempermudah penerbitan Phytosanitary Certificate elektronik yang dapat divalidasi secara langsung (real-time) oleh petugas bea cukai dan biosekuriti di pelabuhan negara pengimpor.";

        // BAB 13
        $c13 = "BAB 13: STUDI KASUS RIIL LAPANGAN DAN ANALISIS AKAR MASALAH (RCA) DI {$cityName}
Pembelajaran berbasis kasus riil memberikan pemahaman mendalam bagi para peserta di {$cityName}:

Studi Kasus 1: Penolakan Kargo Ekspor Akibat Kegagalan Konsentrasi Akhir
Kronologi Kasus:
Sebuah konsinyasi komoditas ekspor dari kawasan pergudangan {$cityName} dikirim menuju negara tujuan ekspor melalui jalur pelabuhan {$port}. Setibanya di pelabuhan bongkar, otoritas biosekuriti setempat menemukan larva serangga hidup pada kemasan barang dan menyatakan Treatment Certificate tidak absah karena konsentrasi gas pada jam ke-24 tercatat berada di bawah ambang batas minimal skema internasional.
Analisis Akar Masalah (Root Cause Analysis):
Investigasi menunjukkan bahwa teknisi pelaksana di {$cityName} tidak melakukan uji peluruhan tekanan pada terpal penutup. Terjadi kebocoran gas masif pada sambungan terpal di sisi yang tidak terpantau, sementara injeksi tambahan (top-up) pada jam ke-4 tidak dilaksanakan akibat kelalaian pemantauan instrumen detektor.
Tindakan Korektif dan Solusi Pembinaan:
Melalui pelatihan ini, ditekankan kewajiban implementasi checklist berlapis, pemasangan tiga titik selang sampling gas independen, serta audit langsung oleh fumigator madya/utama sebelum kargo dilepaskan dari lokasi kerja di {$cityName}.

Studi Kasus 2: Insiden Kebocoran Gas Dekat Jalur Distribusi Pelabuhan
Kronologi:
Aktivitas fumigasi pada sebuah petikemas kargo di area penyangga {$port} {$cityName} menimbulkan bau menyengat yang tercium hingga ke pos jaga keamanan pelabuhan.
Investigasi K3:
Ditemukan bahwa pemasangan selang injeksi gas tidak menggunakan klem pengunci ganda dan jarak perimeter pengamanan bahaya hanya berjarak 3 meter dari jalur lalu lintas kendaraan forklift.
Langkah Korektif:
Standardisasi ulang SOP perimeter minimal 15 meter, kewajiban monitoring keliling berkala setiap 2 jam menggunakan detektor elektronik PID portabel, serta sertifikasi ulang seluruh operator yang bertugas di {$cityName}.";

        // BAB 14
        $c14 = "BAB 14: LEMBAR KENDALI MUTU (CHECKLIST) OPERASIONAL HARIAN FUMIGATOR DI {$cityName}
Standardisasi keunggulan operasional di lapangan {$cityName} dijamin melalui penerapan lembar kendali mutu harian:

Daftar Periksa Fase Pra-Injeksi (Tahap Persiapan):
- [ ] Jarak bebas sekeliling tumpukan minimal 1.5 meter dari dinding struktur bangunan di {$cityName}.
- [ ] Lantai kerja diperiksa bebas retakan; ground sheet terpasang sempurna jika lantai tanah/aspal.
- [ ] Terpal kedap gas diperiksa bebas robek, sambungan terlipat pigtail dan terklem rapat.
- [ ] Jalur selang pemantauan gas (Top, Middle, Bottom) terpasang di titik representatif.
- [ ] Kipas sirkulasi udara teruji fungsi dan terhubung pada sumber daya aman.
- [ ] Kantong pasir pemberat (sand snake) terpasang ganda dan saling menindih minimal 30 cm.
- [ ] Pita barikade dan papan peringatan bahaya resmi terpasang mengelilingi perimeter 15 meter.
- [ ] Tabung SCBA terisi penuh (minimal 280-300 bar) dan lulus uji tekan wajah (face seal).
- [ ] Alat detektor elektronik PID telah diuji nol (zero calibrated) di udara bebas.

Daftar Periksa Fase Injeksi & Pemaparan:
- [ ] Suhu air vaporizer mencapai minimal 65 °C sebelum katup silinder gas dibuka.
- [ ] Timbangan digital mencatat pengurangan berat silinder gas secara akurat sesuai dosis kalkulasi.
- [ ] Deteksi kebocoran sambungan selang dilakukan seketika setelah gas mulai mengalir.
- [ ] Kipas sirkulasi dioperasikan 30 - 60 menit pasca-injeksi untuk pemerataan gas.
- [ ] Logsheet konsentrasi diisi pada jam ke-2, jam ke-4, dan jam ke-24.
- [ ] Injeksi tambahan (top-up) disiapkan jika konsentrasi jam ke-4 terindikasi menurun tajam.

Daftar Periksa Fase Aerasi & Penyerahan:
- [ ] Personel mengenakan unit SCBA lengkap saat membuka klem terpal pertama kali.
- [ ] Arah bukaan terpal memperhatikan hembusan angin dari arah {$geography}.
- [ ] Konsentrasi gas sisa terukur di bawah Nilai Ambang Batas (NAB resmi).
- [ ] Residu padat dideaktivasi aman dan ditempatkan pada wadah khusus limbah B3 di {$cityName}.
- [ ] Lembar Clearance Certificate resmi ditandatangani bersama pemilik barang/kargo.";

        // BAB 15
        $c15 = "BAB 15: BANK SOAL UJIAN KOMPETENSI TEORI DAN SIMULASI PRAKTIK LAPANGAN
Pelatihan di {$cityName} dievaluasi melalui ujian tertulis standar kompetensi kerja nasional. Berikut adalah cuplikan bank soal evaluasi pemahaman fumigator berstandar Badan Karantina Indonesia:

Soal 1 (Kalkulasi Dosis dan Koreksi Volume):
Sebuah tumpukan komoditas {$commodities} di kawasan gudang {$cityName} berukuran panjang 15 meter, lebar 6 meter, dan tinggi 4 meter. Suhu rata-rata komoditas adalah 28 °C. Hitunglah:
a. Volume bruto ruang enclosure.
b. Dosis aplikasi standar yang dipersyaratkan.
c. Kebutuhan berat bahan aktif gas (kg) yang harus diinjeksikan.
d. Konsentrasi batas kritis minimum pada jam ke-24 agar perlakuan dinyatakan absah karantina.
Jawaban Standar Kompetensi:
a. Volume = 15 m x 6 m x 4 m = 360 m³.
b. Pada suhu 28 °C, dosis standar aplikasi adalah 48 g/m³.
c. Total gas = 360 m³ x 48 g/m³ = 17.280 gram = 17.28 kg bahan aktif murni.
d. Konsentrasi minimum jam ke-24 pada suhu tropis adalah 24 g/m³.

Soal 2 (Prinsip K3 dan Proteksi Pernapasan):
Mengapa masker respirator jenis filter kimia (air-purifying canister) dilarang digunakan saat memasuki ruang kontainer yang baru dibuka sebelum proses aerasi dinyatakan selesai di lingkungan kerja {$cityName}?
Kunci Jawaban:
Masker canister bekerja dengan menyerap kontaminan udara melalui karbon aktif, bukan memproduksi udara baru. Pada konsentrasi gas tinggi di dalam ruang belum ter-aerasi (> 500 ppm), filter karbon aktif akan mengalami kejenuhan instan (breakthrough) dalam hitungan detik. Selain itu, kadar oksigen di dalam ruang kedap yang tertutup rapat seringkali anjlok di bawah ambang batas minimal pernapasan (19.5% O2), sehingga pemakai masker canister akan mengalami asfiksia mendadak dan kematian. Personel wajib menggunakan SCBA (Self-Contained Breathing Apparatus) yang menyuplai udara mandiri bertekanan positif.";

        // BAB 16
        $c16 = "BAB 16: INOVASI TEKNOLOGI BARU, SENSOR IOT WIRELESS, DAN MODIFIED ATMOSPHERE
Seiring kemajuan industri 4.0, pelatihan di {$cityName} mengintegrasikan teknologi modern pemantauan perlakuan:

1. Sistem Monitoring Gas Nirkabel Berbasis Internet of Things (IoT):
Teknisi di {$cityName} diperkenalkan pada penggunaan sensor gas digital wireless berkoneksi LoRaWAN / GSM yang ditempatkan di dalam tumpukan enclosure. Sensor ini mengirimkan data konsentrasi real-time setiap 15 menit ke dashboard cloud komputer atau smartphone fumigator penanggung jawab, meniadakan kebutuhan penarikan selang sampling manual yang berisiko mengalami kebocoran sambungan.

2. Teknologi Modifikasi Atmosfer (Modified Atmosphere Treatment / MAT):
Sebagai alternatif perlakuan ramah lingkungan bagi komoditas organik bernilai tinggi di {$cityName}, teknologi MAT memanfaatkan pengabutan gas Karbon Dioksida (CO2 konsentrasi tinggi 60-80%) atau gas Nitrogen (N2 kemurnian 99% untuk menurunkan kadar O2 < 1%). Metode ini membunuh hama melalui mekanisme hipoksia anoksia murni tanpa meninggalkan residu kimia sintetik.

3. Sistem Resirkulasi Otomatis Berkontrol Termostatik:
Penggunaan sistem kontrol blower pintar yang mengatur kecepatan perputaran udara secara dinamis berdasarkan data sensor tekanan dan suhu di dalam enclosure, menghasilkan efisiensi penggunaan bahan fumigan hingga 20% lebih hemat dengan mortalitas hama mencapai 100%.";

        // BAB 17
        $c17 = "BAB 17: SKEMA PEMBINAAN KELAS IN-HOUSE TRAINING DAN SERTIFIKASI PROFESI DI {$cityName}
Guna mempermudah peningkatan kapabilitas sumber daya manusia bagi korporasi dan industri di wilayah {$cityName}, kami menyelenggarakan dua skema pembelajaran terstruktur:

1. Layanan Kelas In-House Training Korporasi:
Dirancang khusus bagi perusahaan eksportir, pengelola pergudangan BUMN/swasta, pabrik pakan ternak, dan depo kontainer di wilayah {$cityName}. Keunggulan kelas in-house meliputi:
- Kurikulum yang disesuaikan secara spesifik dengan komoditas riil ({$commodities}) dan layout fasilitas gudang milik perusahaan.
- Pelaksanaan praktikum lapangan langsung pada aset kargo atau petikemas perusahaan di area {$port} {$cityName}.
- Efisiensi anggaran akomodasi dan biaya perjalanan dinas staf perusahaan.
- Penyusunan Standard Operating Procedure (SOP) internal dan Job Safety Analysis (JSA) yang disesuaikan dengan kondisi riil fasilitas setempat.

2. Skema Sertifikasi Kompetensi Fumigator Berlisensi Barantin:
Peserta yang dinyatakan lulus evaluasi tertulis dan ujian praktik di {$cityName} berhak menerima Sertifikat Kelulusan Resmi dan Transkrip Jam Pembelajaran (JP). Sertifikat ini menjadi bukti kompetensi profesional yang diakui secara nasional untuk pengajuan Kartu Tanda Fumigator dan perpanjangan izin operasional perusahaan perlakuan di Badan Karantina Indonesia.";

// BAB 18
        $c18 = "BAB 18: KESIMPULAN DAN REKOMENDASI STRATEGIS EKONOMI KOMODITAS {$cityName}
Penerapan standar {$serviceName} yang berakar pada ketelitian ilmiah, ketaatan hukum karantina, dan perlindungan keselamatan kerja K3 tertinggi adalah pilar penyangga utama pertumbuhan ekonomi daerah {$cityName}. Dengan menjaga status kargo ekspor dan komoditas pergudangan bebas hama secara konsisten, para pelaku usaha di {$cityName} mampu melindungi reputasi merek dagang, mencegah risiko detensi penolakan kontainer di pelabuhan ekspor dunia (zero rejection), serta mendukung terwujudnya kedaulatan logistik nasional.

Lembaga kami berkomitmen penuh mendampingi instansi pemerintah, BUMN pangan, pelaku usaha swasta, asosiasi eksportir, dan praktisi di seluruh wilayah {$cityName} untuk terus memperbarui wawasan dan mengasah kompetensi teknis melalui pelatihan terakreditasi ini.

Untuk konsultasi pendaftaran, permohonan proposal in-house training korporasi, jadwal kelas reguler batch terdekat di {$cityName}, silakan hubungi tim narahubung resmi kami melalui layanan hotline WhatsApp yang tercantum pada halaman panduan ini. Bersama-sama, kita tegakkan standar integritas komoditas Indonesia di panggung perdagangan global.";

        // BAB 19
        $c19 = "BAB 19: FORMULASI MATEMATIKA MULTI-KOMPARTEMEN, KINETIKA GAS, DAN TABEL DOSIS MULTI-TEMPERATUR DI {$cityName}
Akurasi kalkulasi dosis teknis pada implementasi {$serviceName} di {$cityName} bersandar pada formulasi kinetika termodinamika gas:
1. Persamaan Keadaan Gas Ideal Multi-Kompartemen:
P . V = n . R . T
Di mana:
- P = Tekanan parsial uap gas aktif di dalam enclosure (Atm).
- V = Volume bruto ruang enclosure kargo (m³).
- n = Mol zat aktif {$chemical} yang dilepaskan.
- R = Konstanta gas universal (0.08206 L.atm/mol.K).
- T = Temperatur mutlak komoditas dalam satuan Kelvin (K = °C + 273.15).

Pada suhu tropis {$cityName} yang hangat berkisar 28 °C hingga 33 °C (301.15 K - 306.15 K), pergerakan acak molekul gas meningkat pesat. Peningkatan suhu ini mempercepat difusi gas menembus pori-pori mikro komoditas {$commodities}, namun sekaligus melipatgandakan laju kebocoran mikro jika terdapat kelemahan pada sambungan terpal atau dasar sand snake di lantai dermaga {$port}.

2. Tabel Dosis Standar Multi-Temperatur:
- Suhu Tropis Sangat Tinggi (≥ 31 °C): Dosis Awal: 40 g/m³. Konsentrasi jam ke-2: 30 g/m³. Konsentrasi jam ke-4: 26 g/m³. Konsentrasi minimum jam ke-24: 20 g/m³.
- Suhu Tropis Standar (21 °C - 30.9 °C): Dosis Awal: 48 g/m³. Konsentrasi jam ke-2: 36 g/m³. Konsentrasi jam ke-4: 31 g/m³. Konsentrasi minimum jam ke-24: 24 g/m³.
- Suhu Sedang (16 °C - 20.9 °C): Dosis Awal: 56 g/m³. Konsentrasi jam ke-2: 42 g/m³. Konsentrasi jam ke-4: 36 g/m³. Konsentrasi minimum jam ke-24: 28 g/m³.
- Suhu Dingin (10 °C - 15.9 °C): Dosis Awal: 64 g/m³. Konsentrasi jam ke-2: 48 g/m³. Konsentrasi jam ke-4: 42 g/m³. Konsentrasi minimum jam ke-24: 32 g/m³.
- Suhu di Bawah 10 °C: Tindakan fumigasi dilarang keras menurut regulasi biosekuriti internasional karena efektivitas racun pada sistem saraf serangga menurun drastis dan risiko akumulasi residu melampaui ambang batas aman.

3. Formula Konversi Konsentrasi:
Untuk pembacaan instrumen lapangan di {$cityName}, konversi gram per meter kubik (g/m³) ke part-per-million (ppm) dihitung menggunakan rumus:
Konsentrasi (ppm) = [Konsentrasi (g/m³) x 24.45 x 1000] / Berat Molekul Gas.
Pada suhu standar 25 °C, 1 g/m³ Metil Bromida setara dengan approximately 257.5 ppm, sedangkan 1 g/m³ Fosfin setara dengan approximately 719.1 ppm.";

        // BAB 20
        $c20 = "BAB 20: PROTOKOL KESELAMATAN RUANG TERBATAS (CONFINED SPACE ENTRY) DAN UJI KELAYAKAN UDARA
Banyak tindakan {$serviceName} di {$cityName} dilakukan di dalam ruang tertutup seperti palka kapal di {$port}, petikemas petikemas ekspor, maupun bunker silo:
1. Definisi dan Potensi Bahaya Ruang Terbatas:
Ruang terbatas memiliki akses masuk dan keluar terbatas serta ventilasi alami yang sangat minim. Bahaya mematikan di {$cityName} mencakup kekurangan oksigen (asphyxiation), akumulasi gas beracun B3 melampaui ambang bahaya maut (IDLH - Immediately Dangerous to Life or Health), dan potensi ledakan jika gas mudah terbakar berada di atas konsentrasi batas bawah ledak (Lower Explosive Limit / LEL).

2. Pengujian Tiga Parameter Udara Wajib Sebelum Akses Masuk:
- Kadar Oksigen Bebas: Wajib berada pada rentang 19.5% hingga 23.5% O2.
- Kadar Gas Toksik Fumigan: Wajib berada di bawah ambang batas deteksi aman (NAB: Phosphine ≤ 0.1 ppm, Methyl Bromide ≤ 1.0 ppm).
- Gas Mudah Terbakar (Flammable Gas / LEL): Wajib bernilai 0% LEL.

3. Izin Masuk Ruang Terbatas (Confined Space Entry Permit):
Personel di {$cityName} dilarang keras memasuki ruang terbatas sebelum izin kerja resmi (entry permit) ditandatangani oleh Ahli K3 Kimia dan Pengawas Lapangan. Setiap pekerja yang masuk wajib terhubung dengan tali penyelamat (safety harness & lifeline) dan diawasi oleh petugas siaga (standby attendant) di luar pintu akses.";

        // BAB 21
        $c21 = "BAB 21: PANDUAN PENYELAMATAN MEDIS, TANGGAP DARURAT KERACUNAN B3 & JALUR RUJUKAN DI {$cityName}
Kesiapsiagaan menghadapi kondisi darurat medis saat penanganan {$chemical} di {$cityName} diatur melalui protokol sistematis:
1. Tindakan Cepat di Lokasi Kejadian (On-Site First Response):
- Evakuasi Korban Segera: Regu penolong yang mengenakan SCBA membawa korban keluar dari zona bahaya ke udara segar di atas arah angin (upwind).
- Pelepasan Kontaminan Pakaian: Lepaskan seluruh pakaian korban yang terpapar gas cair atau partikel debu fumigan. Cuci kulit korban menggunakan air mengalir dan sabun selama minimal 15 menit.
- Terapi Oksigenasi: Berikan oksigen murni medis 100% melalui masker non-rebreather jika korban mengalami sesak napas. Jangan biarkan korban melakukan aktivitas fisik berlebih karena dapat memperparah edema paru.

2. Dekontaminasi dan Gejala Tertunda (Latent Toxicity):
Gejala keracunan gas fumigan seringkali memiliki periode laten selama 2 hingga 24 jam pasca-paparan. Korban yang awalnya merasa membaik dapat mengalami sesak napas parah, batuk berbusa, dan kolaps kardiovaskular secara tiba-tiba. Oleh karena itu, observasi medis selama 24 jam penuh di instalasi gawat darurat rumah sakit rujukan di {$cityName} mutlak diwajibkan bagi setiap korban paparan gas.

3. Penyediaan Lembar Data Keselamatan Bahan (MSDS / SDS):
Salinan SDS {$chemical} dalam bahasa Indonesia wajib disimpan di posko K3 lapangan di {$cityName} dan diserahkan kepada dokter jaga rumah sakit untuk panduan penanganan klinis dan pemberian antidotum simtomatik.";

        // BAB 22
        $c22 = "BAB 22: STUDI KASUS AUDIT KARANTINA INTERNASIONAL, DETENSI EKSPOR, DAN RESOLUSI NON-COMPLIANCE
Pelajaran berharga dari sejarah audit biosekuriti perdagangan global komoditas asal {$cityName}:
Kasus 1: Notifikasi Ketidaksesuaian (Notice of Non-Compliance) di Pelabuhan Fremantle
Sebuah kontainer ekspor kemasan kayu asal kawasan sekitar {$cityName} ditahan di Pelabuhan Fremantle, Australia. Pemeriksaan dokumen menunjukkan bahwa stempel IPPC ISPM 15 pada palet kayu buram dan tidak terbaca jelas. Selain itu, sertifikat perlakuan tidak mencantumkan nama bahan kimia dan nomor registrasi perusahaan fumigasi. Otoritas Australia memerintahkan re-fumigasi darurat dengan biaya AUD 8.500 yang dibebankan kepada eksportir.
Langkah Koreksi di Pelatihan:
Peserta diajarkan teknik pembuatan marka stempel anti-luntur, tata cara registrasi nomor ID perusahaan di Barantin, dan verifikasi keterbacaan stempel pada dua sisi berlawanan setiap palet kayu.

Kasus 2: Penolakan Kargo Akibat Residu Fosfin Berlebih di Pelabuhan Hamburg
Pengapalan komoditas curah mengalami penolakan sandar karena pada saat palka kapal dibuka di Pelabuhan Hamburg, Jerman, konsentrasi gas sisa fosfin di dalam palka masih terukur 0.8 ppm (ambang batas Eropa < 0.01 ppm). Eksportir dikenai denda penundaan bongkar muat (demurrage) senilai ribuan Euro.
Langkah Koreksi di Pelatihan:
Instruktur melatih peserta di {$cityName} menghitung waktu aerasi mekanis dengan exhaust blower berdaya tinggi dan melakukan uji clearance test berbasis tabung detektor fotometri sebelum menerbitkan dokumen Gas-Free Declaration.";

        // BAB 23
        $c23 = "BAB 23: INTEGRASI TEKNOLOGI E-PHYTO DAN TRACEABILITY DIGITAL BERSAMA BADAN KARANTINA INDONESIA
Modernisasi sistem karantina di era digital menghubungkan operasional lapangan di {$cityName} dengan jaringan global:
1. Platform Karantina Digital (e-Phyto HUB):
Badan Karantina Indonesia telah terhubung dengan IPPC e-Phyto Hub yang memungkinkan pertukaran sertifikat fitosanitari elektronik antarpemerintah secara nir-kertas (paperless). Perlakuan {$serviceName} yang dilakukan di {$cityName} wajib dilaporkan secara digital mencakup koordinat GPS lokasi perlakuan, rekaman log konsentrasi gas per jam, dan kode unik identitas kemasan.

2. QR-Code Verifikasi Keaslian Sertifikat:
Setiap Treatment Certificate yang diterbitkan oleh alumni pelatihan di {$cityName} dilengkapi dengan barcode QR-Code kriptografis. Petugas karantina negara tujuan dapat memindai barcode tersebut untuk memvalidasi legalitas izin fumigator, tanggal perlakuan, dan riwayat suhu komoditas secara instan tanpa risiko pemalsuan dokumen fisik.

3. Keunggulan Daya Saing Ekspor {$cityName}:
Dengan kepatuhan pada ekosistem digital e-Phyto, kargo ekspor asal {$cityName} memperoleh fasilitas jalur hijau (Green Channel) di pelabuhan-pelabuhan internasional utama di Asia, Eropa, dan Amerika Serikat, memangkas waktu tunggu dwelling time dan menekan biaya logistik secara signifikan.";

        // BAB 24
        $c24 = "BAB 24: SILABUS KURIKULUM LENGKAP 40 JAM PELAJARAN (JP) DAN JADWAL REGULER DI {$cityName}
Program pembinaan {$title} diselenggarakan dalam format intensif 40 Jam Pelajaran (JP) dengan komposisi seimbang antara pendalaman teori regulasi di kelas dan simulasi praktik lapangan:

Rincian Modul Pembelajaran:
- Hari 1: Regulasi Karantina Nasional & Internasional (UU 21/2019, ISPM 15, AFAS), Biologi Hama Sasaran ({$targetPest}), dan Kebijakan Registrasi Fumigator di {$cityName} (8 JP).
- Hari 2: Fisika Termodinamika Gas, Karakteristik Kimiawi {$chemical}, Formulasi Dosis Matematis, dan Praktikum Perhitungan Volume Enclosure Lapangan (8 JP).
- Hari 3: Standard Operating Procedure (SOP) Tahap Persiapan, Pemasangan Ground Sheet, Pelipatan Terpal Kedap Gas, Penataan Sand Snake, dan Uji Kekedapan Tekanan (Pressure Decay Test) (8 JP).
- Hari 4: SOP Pelepasan & Injeksi Gas, Pengoperasian Vaporizer Pemanas, Monitoring Konsentrasi Multi-Titik, SOP Aerasi Aman, dan Praktikum Mandiri Penggunaan SCBA (8 JP).
- Hari 5: Manajemen Residu Limbah B3, Penyusunan Fumigation Logsheet, Evaluasi Ujian Tertulis Nasional, dan Ujian Praktik Lapangan Komprehensif (8 JP).

Informasi Pendaftaran dan Konsultasi Jadwal di {$cityName}:
Jadwal kelas reguler publik dan permohonan in-house training perusahaan untuk wilayah {$cityName} dibuka sepanjang tahun. Silakan menghubungi tim narahubung resmi kami melalui 4 nomor WhatsApp resmi yang tertera pada portal informasi ini:
- Hotline 1 (Info Jadwal & Kuota): 08118500177
- Hotline 2 (Layanan Utama Pendaftaran & Standar Barantin): 081399810272
- Hotline 3 (Silabus Teknis & Ujian Kompetensi): 087894580806
- Hotline 4 (Kerjasama Perusahaan & In-House Training): 087894580649";

        // BAB 25
        $c25 = "BAB 25: PROSEDUR STANDAR PENGELOLAAN RESISTENSI INSEKTISIDA GUDANG TERPADU (IRAC) DI {$cityName}
Resistensi serangga terhadap gas fumigan merupakan ancaman nyata bagi keberlanjutan sektor pascapanen di {$cityName}:
1. Mekanisme Resistensi Biokimia dan Genetik:
Penggunaan gas {$chemical} dalam konsentrasi rendah yang berkepanjangan (sub-lethal exposure) menyebabkan seleksi buatan terhadap populasi serangga sasaran seperti {$targetPest}. Gen resisten mengkodekan enzim detoksifikasi intraseluler atau memodifikasi saluran pernapasan spirakel serangga sehingga gas racun tidak mampu menghambat rantai transpor elektron mitokondria secara sempurna.

2. Protokol Bioassay Uji Resistensi Cepat FAO:
Peserta di {$cityName} dilatih mengambil sampel serangga hidup dari tumpukan komoditas gudang {$commodities} dan melakukan uji celup konsentrasi diskriminatif standar FAO di laboratorium mini lapangan. Bila mortalitas serangga uji dalam waktu 24 jam kurang dari 99%, maka strain hama tersebut dinyatakan memiliki resistensi kuat (strong resistance).

3. Strategi Rotasi Terpadu dan Pemutusan Siklus:
Pelatihan ini merumuskan SOP rotasi perlakuan di {$cityName}:
- Menggabungkan perlakuan fumigasi dengan sanitasi termal atau pengeringan sirkulasi udara dingin.
- Penerapan Modified Atmosphere Treatment (MAT) gas CO2 atau N2 secara berkala untuk memusnahkan strain serangga yang kebal terhadap racun kimia.
- Pemasangan perangkap feromon pemantau (pheromone traps) di sekeliling dinding gudang untuk mendeteksi lonjakan populasi serangga imago sebelum berkembang biak menjadi koloni masif.";

        // BAB 26
        $c26 = "BAB 26: STANDAR KELAYAKAN TEMPAT TINDAKAN KARANTINA (TTK) DAN PERSYARATAN GUDANG DI {$cityName}
Fasilitas fisik tempat pelaksanaan {$serviceName} di {$cityName} wajib memenuhi parameter kelayakan teknis Tempat Tindakan Karantina (TTK) yang diverifikasi oleh Badan Karantina Indonesia:
1. Spesifikasi Konstruksi Lantai dan Dinding:
Lantai gudang perlakuan di kawasan {$port} wajib terbuat dari cor beton bertulang kedap air (reinforced concrete) dengan permukaan halus (hardener finish) tanpa retakan atau sambungan ekspansi yang berpori. Daya dukung lantai minimal 3 hingga 5 ton/m² guna menahan beban tumpukan palet kemasan kayu dan kontainer berat.

2. Sistem Ventilasi dan Saluran Evakuasi Udara:
Gudang perlakuan wajib dilengkapi dengan kisi-kisi ventilasi udara gravitasi di bagian atap (ridge ventilator) serta exhaust fan berdaya hisap tinggi yang terhubung pada saluran cerobong pembuangan (stack exhaust) setinggi minimal 6 meter di atas permukaan tanah, menjamin gas sisa hasil aerasi terdispersi cepat ke atmosfer bebas {$cityName} tanpa membahayakan pekerja sekitar.

3. Fasilitas Penunjang Keselamatan Kerja:
Di setiap lokasi TTK di {$cityName} wajib tersedia:
- Unit pencuci mata darurat (emergency eyewash) dan pancuran keselamatan (safety shower) dengan debit air stabil minimal 1.5 bar.
- Lemari penyimpanan alat keselamatan khusus SCBA, pakaian pelindung kimia Tyvek, dan tabung pemadam api ringan (APAR) tipe serbuk kimia kering ABC.
- Kotak Pertolongan Pertama Pada Kecelakaan (P3K) khusus kimia B3 yang dilengkapi dengan tabung oksigen portabel dan sungkup resusitasi medis.";

        // BAB 27
        $c27 = "BAB 27: GLOSARIUM LENGKAP ISTILAH TEKNIS FUMIGASI DAN BIOSEKURITI INTERNASIONAL
Untuk mempermudah pemahaman peserta pelatihan di {$cityName}, berikut adalah glosarium istilah teknis resmi:
- AFAS (Australian Fumigation Accreditation Scheme): Skema akreditasi bilateral antara pemerintah Australia dan Indonesia untuk standardisasi perlakuan fumigasi ekspor.
- Barantin (Badan Karantina Indonesia): Lembaga pemerintah non-kementerian yang bertugas menyelenggarakan perkarantinaan hewan, ikan, dan tumbuhan di Indonesia.
- Clearance Certificate: Surat pernyataan resmi bertanda tangan fumigator yang menyatakan bahwa ruangan atau kontainer telah bebas dari gas beracun dan aman dimasuki manusia.
- CT-Product (Concentration x Time Product): Nilai akumulasi perkalian antara konsentrasi gas aktif (g/m³) dengan durasi waktu pemaparan (jam) yang menentukan efikasi kematian hama.
- Desorpsi: Proses pelepasan kembali molekul gas yang sebelumnya terserap di dalam pori-pori komoditas ke udara sekitar selama fase aerasi berlangsung.
- Dunnage: Kayu penyangga, balok penopang, atau bantalan kayu yang digunakan untuk mengamankan kargo di dalam petikemas atau palka kapal.
- Gas-Tightness: Tingkat kekedapan suatu ruangan enclosure atau lembaran terpal penutup dalam menahan molekul gas agar tidak merembes keluar ke lingkungan bebas.
- IDLH (Immediately Dangerous to Life or Health): Konsentrasi zat kimia di udara yang menimbulkan ancaman kematian mendadak atau dampak kesehatan permanen jika terhirup.
- ISPM 15 (International Standards for Phytosanitary Measures No. 15): Standar internasional perlakuan kemasan kayu perdagangan global untuk mencegah penyebaran hama hutan.
- OPTK (Organisme Pengganggu Tumbuhan Karantina): Semua bentuk hama atau penyakit tumbuhan yang ditetapkan oleh pemerintah untuk dicegah masuk atau keluarnya dari wilayah Republik Indonesia.
- PID (Photoionization Detector): Instrumen elektronik digital presisi tinggi untuk mendeteksi konsentrasi gas organik volatil dan gas fumigan beracun secara real-time.
- Pressure Decay Test: Metode pengujian kekedapan ruang sungkup dengan mengukur waktu yang dibutuhkan bagi penurunan tekanan udara dari nilai awal ke nilai akhir.
- SCBA (Self-Contained Breathing Apparatus): Alat pelindung pernapasan mandiri bertekanan positif yang memasok udara murni dari tabung bertekanan tinggi independen.
- Sorpsi: Penyerapan molekul gas fumigan oleh permukaan luar (adsorpsi) maupun pori-pori bagian dalam (absorpsi) bahan komoditas yang diperlakukan.
- TLV-TWA (Threshold Limit Value - Time Weighted Average): Konsentrasi rata-rata tertimbang waktu dari zat berbahaya yang aman terpapar pada pekerja selama 8 jam kerja per hari.
- Vaporizer: Bejana pemanas khusus bersirkulasi air panas yang digunakan untuk menguapkan cairan gas bertekanan tinggi menjadi fase uap gas sebelum dialirkan ke dalam sungkup komoditas.";

        // BAB 28
        $c28 = "BAB 28: KETENTUAN HUKUM, SANKSI PIDANA, DAN INTEGRITAS PROFESIONAL FUMIGATOR INDONESIA
Sebagai penutup panduan pembinaan teknis {$serviceName} di {$cityName}, setiap personel dan badan hukum pengelola perlakuan diingatkan pada konsekuensi hukum atas integritas profesi:
1. Sanksi Pidana Pemalsuan Dokumen dan Manipulasi Data Perlakuan:
Berdasarkan Pasal 88 Undang-Undang RI Nomor 21 Tahun 2019 tentang Karantina Hewan, Ikan, dan Tumbuhan, setiap orang yang dengan sengaja memalsukan surat keterangan karantina, menerbitkan Treatment Certificate fiktif tanpa pelaksanaan tindakan riil di lapangan {$cityName}, atau memanipulasi angka konsentrasi gas pada logsheet resmi, diancam dengan pidana penjara paling lama 3 (tiga) tahun dan denda paling banyak Rp 3.000.000.000,- (tiga miliar rupiah).

2. Tanggung Jawab Hukum Pidana Kelalaian K3 (Kealpaan yang Menyebabkan Kematian):
Sesuai Pasal 359 Kitab Undang-Undang Hukum Pidana (KUHP) jo. Undang-Undang Nomor 1 Tahun 1970 tentang Keselamatan Kerja, penanggung jawab operasional atau fumigator yang lalai menerapkan SOP keselamatan (seperti tidak memasang barikade bahaya, mengabaikan pengoperasian SCBA, atau mengizinkan pekerja masuk sebelum diterbitkannya Gas-Free Certificate) sehingga mengakibatkan orang lain keracunan atau meninggal dunia di lingkungan kerja {$cityName}, diancam dengan pidana penjara maksimal 5 tahun.

3. Kode Etik Profesi Fumigator Berlisensi Nasional:
Alumni pelatihan di {$cityName} diikat oleh janji kode etik profesional:
- Mengutamakan perlindungan jiwa manusia dan kelestarian ekosistem lingkungan di atas kepentingan komersial sesaat.
- Menolak segala bentuk penerbitan sertifikat perlakuan tanpa tindakan karantina yang sah.
- Melaksanakan pemantauan konsentrasi gas secara jujur, objektif, dan transparan sesuai fakta pembacaan instrumen deteksi.
- Senantiasa meningkatkan kompetensi diri dan berpartisipasi aktif dalam menjaga kedaulatan biosekuriti komoditas pertanian dan logistik nasional Republik Indonesia.";

        return $c1 . "\n\n" . $c2 . "\n\n" . $c3 . "\n\n" . $c4 . "\n\n" . $c5 . "\n\n" . $c6 . "\n\n" . $c7 . "\n\n" . $c8 . "\n\n" . $c9 . "\n\n" . $c10 . "\n\n" . $c11 . "\n\n" . $c12 . "\n\n" . $c13 . "\n\n" . $c14 . "\n\n" . $c15 . "\n\n" . $c16 . "\n\n" . $c17 . "\n\n" . $c18 . "\n\n" . $c19 . "\n\n" . $c20 . "\n\n" . $c21 . "\n\n" . $c22 . "\n\n" . $c23 . "\n\n" . $c24 . "\n\n" . $c25 . "\n\n" . $c26 . "\n\n" . $c27 . "\n\n" . $c28;
    }
}
