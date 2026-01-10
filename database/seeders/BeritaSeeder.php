<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'judul' => 'Lurah Mangalli Mengadakan Kegiatan Gotong Royong',
                'slug' => 'Lurah-Mangalli-mengadakan-kegiatan-gotong-royong',
                'isi' => 'Lurah Mangalli mengadakan kegiatan gotong royong untuk membersihkan lingkungan Lurah. Kegiatan ini diikuti oleh seluruh warga Lurah dan berlangsung dengan semangat kebersamaan yang tinggi.',
                'gambar' =>  'banner-1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pembangunan Infrastruktur Jalan di Lurah Mangalli',
                'slug' => 'pembangunan-infrastruktur-jalan-di-Lurah-Mangalli',
                'isi' => 'Pemerintah Lurah Mangalli memulai proyek pembangunan infrastruktur jalan untuk meningkatkan aksesibilitas dan mobilitas warga Lurah. Proyek ini diharapkan dapat mendukung pertumbuhan ekonomi lokal.',
                'gambar' =>  'banner-1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Festival Budaya Lurah Mangalli Sukses Digelar',
                'slug' => 'festival-budaya-Lurah-Mangalli-sukses-digelar',
                'isi' => 'Festival Budaya Lurah Mangalli berhasil digelar dengan sukses, menampilkan berbagai pertunjukan seni dan budaya lokal. Acara ini menarik banyak pengunjung dari luar Lurah dan memberikan dampak positif bagi perekonomian setempat.',
                'gambar' =>  'banner-1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pelatihan Kewirausahaan untuk Pemuda Lurah Mangalli',
                'slug' => 'pelatihan-kewirausahaan-untuk-pemuda-Lurah-Mangalli',
                'isi' => 'Pemerintah Lurah Mangalli mengadakan pelatihan kewirausahaan bagi para pemuda Lurah untuk meningkatkan keterampilan dan mendorong munculnya usaha baru di tingkat lokal.',
                'gambar' =>  'banner-1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Penanaman Pohon di Sekitar Area Sungai Lurah Mangalli',
                'slug' => 'penanaman-pohon-di-sekitar-area-sungai-Lurah-Mangalli',
                'isi' => 'Dalam rangka menjaga kelestarian lingkungan, warga Lurah Mangalli melakukan kegiatan penanaman pohon di sekitar area sungai untuk mengurangi erosi dan menjaga ekosistem air.',
                'gambar' =>  'banner-1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Lomba Kebersihan Antar Dusun di Lurah Mangalli',
                'slug' => 'lomba-kebersihan-antar-dusun-di-Lurah-Mangalli',
                'isi' => 'Dalam rangka memperingati Hari Kemerdekaan, Lurah Mangalli mengadakan lomba kebersihan antar dusun untuk menumbuhkan kesadaran masyarakat akan pentingnya kebersihan lingkungan.',
                'gambar' =>  'banner-1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Posyandu Lurah Mangalli Rutin Adakan Pemeriksaan Balita',
                'slug' => 'posyandu-Lurah-Mangalli-rutin-adakan-pemeriksaan-balita',
                'isi' => 'Kader Posyandu Lurah Mangalli rutin mengadakan pemeriksaan kesehatan balita setiap bulan untuk memastikan tumbuh kembang anak-anak berjalan dengan baik.',
                'gambar' =>  'banner-1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pemerintah Lurah Salurkan Bantuan Sosial kepada Warga Kurang Mampu',
                'slug' => 'pemerintah-Lurah-salurkan-bantuan-sosial-kepada-warga-kurang-mampu',
                'isi' => 'Pemerintah Lurah Mangalli menyalurkan bantuan sosial berupa sembako dan kebutuhan pokok kepada warga kurang mampu sebagai bentuk kepedulian terhadap masyarakat.',
                'gambar' =>  'banner-1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Kegiatan Senam Pagi Bersama Warga Lurah Mangalli',
                'slug' => 'kegiatan-senam-pagi-bersama-warga-Lurah-Mangalli',
                'isi' => 'Untuk menjaga kesehatan dan mempererat kebersamaan, warga Lurah Mangalli mengadakan kegiatan senam pagi bersama di lapangan Lurah setiap hari Minggu pagi.',
                'gambar' =>  'banner-1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pemerintah Lurah Mangalli Gelar Musyawarah Perencanaan Pembangunan',
                'slug' => 'pemerintah-Lurah-Mangalli-gelar-musyawarah-perencanaan-pembangunan',
                'isi' => 'Pemerintah Lurah Mangalli menggelar musyawarah perencanaan pembangunan untuk membahas rencana strategis pembangunan Lurah tahun mendatang bersama seluruh perangkat dan perwakilan warga.',
                'gambar' =>  'banner-1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];


        \App\Models\BeritaDesa::insert($data);
    }
}
