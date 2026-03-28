<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\KategoriBerita;
use App\Models\Berita;
use App\Models\BidangCsr;
use App\Models\Perusahaan;
use App\Models\ProgramCsr;
use App\Models\LaporanCsr;
use App\Models\Regulasi;
use App\Models\Pengumuman;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name'     => 'Admin Bayan',
            'email'    => 'admin@bayangroup.com',
            'password' => bcrypt('password'),
        ]);

        // ===== KATEGORI BERITA =====
        $katCSR     = KategoriBerita::create(['nama' => 'Berita CSR',              'slug' => 'berita-csr']);
        $katLingk   = KategoriBerita::create(['nama' => 'Lingkungan',              'slug' => 'lingkungan']);
        $katSosial  = KategoriBerita::create(['nama' => 'Sosial & Pendidikan',     'slug' => 'sosial-pendidikan']);
        $katPemberd = KategoriBerita::create(['nama' => 'Pemberdayaan Masyarakat', 'slug' => 'pemberdayaan-masyarakat']);

        // ===== BERITA =====
        $articles = [
            [
                'judul'        => 'Bayan Group Salurkan Beasiswa Tabang untuk 120 Pelajar Berprestasi 2026',
                'slug'         => 'bayan-group-salurkan-beasiswa-tabang-120-pelajar-2026',
                'kategori_id'  => $katSosial->id,
                'thumbnail'    => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=900&q=80',
                'excerpt'      => 'Sebanyak 120 pelajar dari kawasan operasional Tabang, Kutai Kartanegara, menerima beasiswa penuh dari program PPM Bayan Group tahun 2026.',
                'isi'          => '<p>PT Bayan Resources Tbk melalui program Pengembangan dan Pemberdayaan Masyarakat (PPM) kembali menyalurkan beasiswa pendidikan kepada 120 pelajar berprestasi dari kawasan Tabang, Kutai Kartanegara, Kalimantan Timur.</p><p>Beasiswa senilai total Rp 2,4 miliar ini diberikan dalam bentuk biaya pendidikan penuh mulai dari tingkat SMP hingga perguruan tinggi. Para penerima beasiswa dipilih berdasarkan prestasi akademik dan kondisi ekonomi keluarga.</p><h2>Komitmen Jangka Panjang</h2><p>Direktur CSR PT Bayan Resources Tbk menyatakan bahwa program beasiswa ini merupakan bagian dari komitmen jangka panjang perusahaan untuk mencerdaskan generasi penerus di kawasan operasional tambang.</p><ul><li>Siswa SMP dan SMA dari Kecamatan Tabang</li><li>Mahasiswa D3/S1 jurusan teknik, kesehatan, dan pertanian</li><li>Guru desa yang ingin meningkatkan kualifikasi pendidikan</li></ul>',
                'published_at' => now()->subDays(2),
            ],
            [
                'judul'        => 'Program Klinik Keliling PPM Jangkau 3.200 Warga Terpencil di Kutai Barat',
                'slug'         => 'klinik-keliling-ppm-jangkau-3200-warga-kutai-barat',
                'kategori_id'  => $katCSR->id,
                'thumbnail'    => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=900&q=80',
                'excerpt'      => 'Klinik keliling PPM Bayan Group berhasil menjangkau 3.200 warga di 12 desa terpencil di Kutai Barat yang selama ini minim akses layanan kesehatan.',
                'isi'          => '<p>Program Klinik Keliling yang diselenggarakan oleh PPM PT Bayan Resources Tbk telah berhasil memberikan layanan kesehatan gratis kepada 3.200 warga di 12 desa terpencil di Kutai Barat, Kalimantan Timur.</p><ul><li>Pemeriksaan kesehatan umum</li><li>Imunisasi anak balita</li><li>Pemeriksaan gizi ibu hamil</li><li>Distribusi obat-obatan gratis</li><li>Penyuluhan PHBS</li></ul>',
                'published_at' => now()->subDays(5),
            ],
            [
                'judul'        => 'Penanaman 50.000 Pohon di Area Pascatambang Tabang — Komitmen Reklamasi Bayan',
                'slug'         => 'penanaman-50000-pohon-pascatambang-tabang-2026',
                'kategori_id'  => $katLingk->id,
                'thumbnail'    => 'https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?w=900&q=80',
                'excerpt'      => 'PT Bayan Resources Tbk menanam 50.000 pohon endemik Kalimantan di lahan pascatambang Tabang sebagai bagian dari program reklamasi dan rehabilitasi lingkungan 2026.',
                'isi'          => '<p>Sebagai wujud komitmen terhadap keberlanjutan lingkungan, PT Bayan Resources Tbk melaksanakan program penanaman 50.000 pohon endemik Kalimantan di lahan pascatambang Tabang.</p><ul><li><strong>Ulin</strong> — kayu besi endemik Kalimantan</li><li><strong>Meranti Merah</strong> — pohon hutan hujan tropis</li><li><strong>Sengon</strong> — pemulihan cepat lahan kritis</li><li><strong>Durian Hutan</strong> — ketahanan pangan lokal</li></ul>',
                'published_at' => now()->subDays(9),
            ],
            [
                'judul'        => 'UMKM Madu Hutan Desa Muara Bengkal Tembus Pasar Ekspor Berkat Dukungan PPM',
                'slug'         => 'umkm-madu-hutan-muara-bengkal-ekspor-ppm-bayan',
                'kategori_id'  => $katPemberd->id,
                'thumbnail'    => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?w=900&q=80',
                'excerpt'      => 'Kelompok UMKM Madu Hutan Desa Muara Bengkal binaan PPM Bayan berhasil menembus pasar ekspor ke Malaysia dan Singapura dengan nilai transaksi Rp 1,2 miliar pada 2026.',
                'isi'          => '<p>Kisah sukses datang dari Desa Muara Bengkal, Kutai Timur. Kelompok UMKM Madu Hutan yang dibina oleh program PPM PT Bayan Resources Tbk berhasil menembus pasar ekspor internasional untuk pertama kalinya.</p><p>Produk madu hutan liar dari hutan Kalimantan Timur ini kini resmi diekspor ke Malaysia dan Singapura, dengan nilai transaksi mencapai Rp 1,2 miliar sepanjang tahun 2026.</p>',
                'published_at' => now()->subDays(14),
            ],
            [
                'judul'        => 'Infrastruktur Jalan Desa Ritan Baru Selesai Dibangun — Akses 5 Desa Kini Terbuka',
                'slug'         => 'infrastruktur-jalan-desa-ritan-baru-selesai-2026',
                'kategori_id'  => $katPemberd->id,
                'thumbnail'    => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900&q=80',
                'excerpt'      => 'Pembangunan jalan penghubung sepanjang 12 km di Desa Ritan Baru telah selesai dikerjakan PPM Bayan, membuka akses bagi 5 desa yang selama ini terisolir.',
                'isi'          => '<p>Sebuah pencapaian besar bagi masyarakat di pedalaman Kutai Barat — jalan penghubung sepanjang 12 kilometer kini telah selesai dibangun oleh program PPM PT Bayan Resources Tbk.</p><ul><li>Harga bahan pokok turun 30-40%</li><li>Hasil pertanian bisa dipasarkan ke kota</li><li>Layanan ambulans kini bisa menjangkau wilayah ini</li></ul>',
                'published_at' => now()->subDays(20),
            ],
            [
                'judul'        => 'Bayan Group Raih Penghargaan PROPER Hijau dari KLHK 2026',
                'slug'         => 'bayan-group-proper-hijau-klhk-2026',
                'kategori_id'  => $katLingk->id,
                'thumbnail'    => 'https://images.unsplash.com/photo-1542601906897-ecd46e2e9b8d?w=900&q=80',
                'excerpt'      => 'PT Bayan Resources Tbk kembali meraih penghargaan PROPER Hijau dari Kementerian Lingkungan Hidup dan Kehutanan atas komitmen pengelolaan lingkungan yang melampaui standar regulasi.',
                'isi'          => '<p>PT Bayan Resources Tbk kembali membuktikan diri sebagai perusahaan tambang yang bertanggung jawab terhadap lingkungan, meraih PROPER Hijau untuk ketiga kalinya berturut-turut.</p><ul><li>Zero discharge limbah ke badan air</li><li>Energi terbarukan di seluruh camp operasional</li><li>Program biodiversity monitoring di kawasan konservasi</li></ul>',
                'published_at' => now()->subDays(25),
            ],
            [
                'judul'        => 'Pelatihan Petani Kakao PPM Bayan: 300 Petani Kuasai Teknik Fermentasi Modern',
                'slug'         => 'pelatihan-petani-kakao-ppm-bayan-fermentasi-modern',
                'kategori_id'  => $katPemberd->id,
                'thumbnail'    => 'https://images.unsplash.com/photo-1495467033336-2effd8753d51?w=900&q=80',
                'excerpt'      => '300 petani kakao di Kalimantan Timur menguasai teknik fermentasi modern hasil pelatihan PPM Bayan Group, meningkatkan nilai jual produk kakao hingga 3x lipat.',
                'isi'          => '<p>Tiga ratus petani kakao dari 15 desa di Kalimantan Timur kini telah menguasai teknik fermentasi kakao modern berkat program pelatihan PPM Bayan.</p><ul><li>Harga jual kakao naik dari Rp 25.000 menjadi Rp 75.000/kg</li><li>Kualitas flavor grade A tercapai secara konsisten</li><li>Pembeli premium dari Eropa mulai menjajaki kerjasama langsung</li></ul>',
                'published_at' => now()->subDays(33),
            ],
            [
                'judul'        => 'Forum Musyawarah PPM 2026: Masyarakat Tentukan Prioritas Program Bersama',
                'slug'         => 'forum-musyawarah-ppm-2026-prioritas-program',
                'kategori_id'  => $katCSR->id,
                'thumbnail'    => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=900&q=80',
                'excerpt'      => 'Forum Musyawarah PPM 2026 melibatkan 450 perwakilan masyarakat dari 28 desa untuk bersama menentukan prioritas program pemberdayaan tahun anggaran 2026-2027.',
                'isi'          => '<p>PPM PT Bayan Resources Tbk menyelenggarakan Forum Musyawarah Perencanaan PPM 2026 yang dihadiri oleh 450 perwakilan masyarakat dari 28 desa.</p><ol><li>Peningkatan akses air bersih di 8 desa</li><li>Pembangunan 3 gedung sekolah dasar</li><li>Program beasiswa S1 bidang kesehatan</li><li>Penguatan kelompok tani kakao dan karet</li><li>Rehabilitasi sumber mata air</li></ol>',
                'published_at' => now()->subDays(40),
            ],
            [
                'judul'        => 'Sistem Irigasi Modern PPM Bayan Airi 1.200 Hektar Sawah di Kabupaten Paser',
                'slug'         => 'irigasi-modern-ppm-bayan-1200-hektar-paser',
                'kategori_id'  => $katPemberd->id,
                'thumbnail'    => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=900&q=80',
                'excerpt'      => 'Sistem irigasi modern yang dibangun program PPM Bayan berhasil mengairi 1.200 hektar lahan pertanian di Kabupaten Paser, meningkatkan produksi padi hingga 180%.',
                'isi'          => '<p>Lahan sawah yang dulunya hanya bisa panen setahun sekali, kini bisa panen tiga kali setahun berkat jaringan irigasi modern PPM Bayan di Kabupaten Paser.</p><ul><li>Produksi padi naik dari 2,8 ton/ha menjadi 7,8 ton/ha</li><li>Pendapatan petani naik dari Rp 15 juta menjadi Rp 42 juta/tahun</li><li>380 keluarga tani menjadi penerima manfaat</li></ul>',
                'published_at' => now()->subDays(50),
            ],
        ];
        foreach ($articles as $a) Berita::create($a);

        // ===== REGULASI =====
        $regulasiData = [
            ['judul' => 'UU No. 3 Tahun 2020',           'nomor_regulasi' => 'Perubahan atas UU Minerba No. 4/2009 tentang pertambangan mineral dan batubara.',              'link_dokumen' => '#'],
            ['judul' => 'UU No. 6 Tahun 2023',           'nomor_regulasi' => 'Undang-Undang Cipta Kerja terkait penyederhanaan perizinan berusaha berbasis risiko (OSS).',  'link_dokumen' => '#'],
            ['judul' => 'PP No. 96 Tahun 2021',          'nomor_regulasi' => 'Pelaksanaan kegiatan usaha pertambangan minerba serta perpanjangan PKP2B menjadi IUPK.',      'link_dokumen' => '#'],
            ['judul' => 'Permen ESDM No. 26 Tahun 2018', 'nomor_regulasi' => 'Penerapan Good Mining Practice (Kaidah Teknik Pertambangan yang Baik) secara berkelanjutan.', 'link_dokumen' => '#'],
            ['judul' => 'Kepmen ESDM No. 1824 K/2018',   'nomor_regulasi' => 'Pedoman Pelaksanaan Pengembangan dan Pemberdayaan Masyarakat (PPM) "Bayan Peduli".',          'link_dokumen' => '#'],
            ['judul' => 'Permen ESDM No. 10 Tahun 2023', 'nomor_regulasi' => 'Tata cara penyusunan, penyampaian, dan persetujuan Rencana Kerja dan Anggaran Biaya (RKAB).', 'link_dokumen' => '#'],
        ];
        foreach ($regulasiData as $r) Regulasi::create($r);

        // ===== PENGUMUMAN =====
        $pengumumans = [
            ['judul' => 'Pendaftaran Beasiswa PPM Bayan 2026 Telah Dibuka',        'isi' => 'Program beasiswa PPM Bayan 2026 resmi dibuka untuk pelajar SMP, SMA, dan mahasiswa D3/S1 dari kawasan operasional Tabang, Kutai Barat, dan Paser. Kuota tersedia untuk 150 penerima. Pendaftaran online melalui portal PPM mulai 1 April hingga 30 April 2026.',             'prioritas' => 'penting', 'is_active' => true, 'published_at' => now()->subDays(1),  'image' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1400&q=85'],
            ['judul' => 'Jadwal Klinik Keliling PPM – April 2026',                 'isi' => 'Tim medis PPM Bayan akan mengunjungi 12 desa di Kutai Barat pada 5-25 April 2026. Layanan meliputi pemeriksaan umum, imunisasi, dan konseling gizi. Tidak dipungut biaya apapun.',                                                                                                'prioritas' => 'info',    'is_active' => true, 'published_at' => now()->subDays(3),  'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1400&q=85'],
            ['judul' => 'Rekrutmen Fasilitator Program Pertanian PPM 2026',        'isi' => 'PPM Bayan membuka rekrutmen 20 fasilitator pertanian untuk mendampingi kelompok tani di Paser dan Kutai Timur. Persyaratan: lulusan S1 Pertanian/Kehutanan, bersedia ditempatkan di lapangan. Deadline: 15 April 2026.',                                                           'prioritas' => 'info',    'is_active' => true, 'published_at' => now()->subDays(5),  'image' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=1400&q=85'],
            ['judul' => 'Laporan Realisasi PPM Kuartal I 2026 Telah Diterbitkan',  'isi' => 'Laporan realisasi program PPM Kuartal I 2026 mencakup realisasi anggaran sebesar Rp 23,4 miliar dari target Rp 85 miliar. Laporan dapat diunduh di menu Laporan portal ini.',                                                                                                    'prioritas' => 'umum',    'is_active' => true, 'published_at' => now()->subDays(7),  'image' => 'https://images.unsplash.com/photo-1542601906897-ecd46e2e9b8d?w=1400&q=85'],
            ['judul' => 'Forum Musyawarah PPM Kabupaten Paser – 20 April 2026',    'isi' => 'PPM Bayan mengundang seluruh kepala desa dan perwakilan masyarakat di Kabupaten Paser untuk hadir dalam Forum Musyawarah PPM 2026 yang akan diselenggarakan pada 20 April 2026 di Aula Pendopo Kabupaten Paser.',                                                                 'prioritas' => 'penting', 'is_active' => true, 'published_at' => now()->subDays(10), 'image' => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1400&q=85'],
        ];
        foreach ($pengumumans as $p) Pengumuman::create($p);

        // ===== 8 BIDANG PPM =====
        $bidangPendidikan = BidangCsr::create(['nama' => 'Pendidikan',                   'icon' => 'school',            'deskripsi' => 'Beasiswa, pelatihan guru, dan pembangunan fasilitas pendidikan di kawasan operasional.']);
        $bidangKesehatan  = BidangCsr::create(['nama' => 'Kesehatan',                    'icon' => 'health_and_safety', 'deskripsi' => 'Klinik keliling, posyandu, dan distribusi obat gratis untuk masyarakat.']);
        $bidangEkonomi    = BidangCsr::create(['nama' => 'Ekonomi & UMKM',               'icon' => 'storefront',        'deskripsi' => 'Pemberdayaan UMKM, pelatihan kewirausahaan, dan akses permodalan.']);
        $bidangInfra      = BidangCsr::create(['nama' => 'Infrastruktur',                'icon' => 'construction',      'deskripsi' => 'Pembangunan jalan desa, jembatan, dan fasilitas air bersih.']);
        $bidangLingkungan = BidangCsr::create(['nama' => 'Lingkungan Hidup',             'icon' => 'park',              'deskripsi' => 'Reklamasi pascatambang, penghijauan, dan pengelolaan lingkungan berkelanjutan.']);
        $bidangPertanian  = BidangCsr::create(['nama' => 'Pertanian & Ketahanan Pangan', 'icon' => 'agriculture',       'deskripsi' => 'Irigasi, pelatihan petani, dan pengembangan komoditas unggulan lokal.']);
        $bidangBudaya     = BidangCsr::create(['nama' => 'Sosial Budaya & Olahraga',     'icon' => 'groups',            'deskripsi' => 'Pelestarian budaya, fasilitas olahraga, dan kegiatan kemasyarakatan.']);
        $bidangEnergi     = BidangCsr::create(['nama' => 'Energi Mandiri',               'icon' => 'bolt',              'deskripsi' => 'Akses listrik dan energi terbarukan untuk desa-desa terpencil.']);

        // ===== PERUSAHAAN =====
        $ptBayan  = Perusahaan::create(['nama' => 'PT Bayan Resources Tbk',        'bidang_csr_id' => $bidangPendidikan->id]);
        $ptWahana = Perusahaan::create(['nama' => 'PT Wahana Baratama Mining',     'bidang_csr_id' => $bidangKesehatan->id]);
        $ptGuntur = Perusahaan::create(['nama' => 'PT Guntur Geni',                'bidang_csr_id' => $bidangInfra->id]);
        $ptBerau  = Perusahaan::create(['nama' => 'PT Berau Usaha Mulya',          'bidang_csr_id' => $bidangLingkungan->id]);

        // ===== PROGRAM CSR =====
        $pBeasiswa = ProgramCsr::create(['nama' => 'Beasiswa Tabang 2026',          'bidang_id' => $bidangPendidikan->id,  'perusahaan_id' => $ptBayan->id,   'anggaran' => 2400000000,  'lokasi' => 'Tabang, Kukar',        'tahun' => 2026]);
        $pKlinik   = ProgramCsr::create(['nama' => 'Klinik Keliling Kutai Barat',   'bidang_id' => $bidangKesehatan->id,   'perusahaan_id' => $ptWahana->id,  'anggaran' => 1800000000,  'lokasi' => 'Kutai Barat',          'tahun' => 2026]);
        $pJalan    = ProgramCsr::create(['nama' => 'Jalan Desa Ritan Baru',         'bidang_id' => $bidangInfra->id,       'perusahaan_id' => $ptGuntur->id,  'anggaran' => 8500000000,  'lokasi' => 'Kutai Barat',          'tahun' => 2026]);
        $pReklam   = ProgramCsr::create(['nama' => 'Reklamasi Pascatambang Tabang', 'bidang_id' => $bidangLingkungan->id,  'perusahaan_id' => $ptBerau->id,   'anggaran' => 5200000000,  'lokasi' => 'Tabang, Kukar',        'tahun' => 2026]);
        $pIrigasi  = ProgramCsr::create(['nama' => 'Irigasi Modern Paser',          'bidang_id' => $bidangPertanian->id,   'perusahaan_id' => $ptBayan->id,   'anggaran' => 12000000000, 'lokasi' => 'Kabupaten Paser',      'tahun' => 2026]);
        $pUMKM     = ProgramCsr::create(['nama' => 'Pengembangan UMKM Madu Hutan',  'bidang_id' => $bidangEkonomi->id,     'perusahaan_id' => $ptWahana->id,  'anggaran' => 950000000,   'lokasi' => 'Muara Bengkal, Kutim', 'tahun' => 2026]);
        $pEnergi   = ProgramCsr::create(['nama' => 'Listrik Desa Terpencil',        'bidang_id' => $bidangEnergi->id,      'perusahaan_id' => $ptGuntur->id,  'anggaran' => 3100000000,  'lokasi' => 'Kutai Barat',          'tahun' => 2026]);
        $pBudaya   = ProgramCsr::create(['nama' => 'Festival Budaya Dayak 2026',    'bidang_id' => $bidangBudaya->id,      'perusahaan_id' => $ptBerau->id,   'anggaran' => 750000000,   'lokasi' => 'Tanjung Selor',        'tahun' => 2026]);

        // ===== LAPORAN CSR =====
        LaporanCsr::create(['bidang_id' => $bidangPendidikan->id,  'program_id' => $pBeasiswa->id, 'perusahaan_id' => $ptBayan->id,   'lokasi' => 'Desa Tabang',       'nominal' => 2400000000,  'tahun' => 2026]);
        LaporanCsr::create(['bidang_id' => $bidangKesehatan->id,   'program_id' => $pKlinik->id,   'perusahaan_id' => $ptWahana->id,  'lokasi' => 'Kutai Barat',       'nominal' => 1800000000,  'tahun' => 2026]);
        LaporanCsr::create(['bidang_id' => $bidangInfra->id,       'program_id' => $pJalan->id,    'perusahaan_id' => $ptGuntur->id,  'lokasi' => 'Desa Ritan Baru',   'nominal' => 8500000000,  'tahun' => 2026]);
        LaporanCsr::create(['bidang_id' => $bidangLingkungan->id,  'program_id' => $pReklam->id,   'perusahaan_id' => $ptBerau->id,   'lokasi' => 'Tabang, Kukar',     'nominal' => 5200000000,  'tahun' => 2026]);
        LaporanCsr::create(['bidang_id' => $bidangPertanian->id,   'program_id' => $pIrigasi->id,  'perusahaan_id' => $ptBayan->id,   'lokasi' => 'Kabupaten Paser',   'nominal' => 12000000000, 'tahun' => 2026]);
        LaporanCsr::create(['bidang_id' => $bidangEkonomi->id,     'program_id' => $pUMKM->id,     'perusahaan_id' => $ptWahana->id,  'lokasi' => 'Muara Bengkal',     'nominal' => 950000000,   'tahun' => 2026]);
        LaporanCsr::create(['bidang_id' => $bidangEnergi->id,      'program_id' => $pEnergi->id,   'perusahaan_id' => $ptGuntur->id,  'lokasi' => 'Kutai Barat',       'nominal' => 3100000000,  'tahun' => 2026]);
        LaporanCsr::create(['bidang_id' => $bidangBudaya->id,      'program_id' => $pBudaya->id,   'perusahaan_id' => $ptBerau->id,   'lokasi' => 'Tanjung Selor',     'nominal' => 750000000,   'tahun' => 2026]);
    }
}
