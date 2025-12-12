<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function welcome()
    {
        $aparat = [
            [
                'nip' => '19940418 201507 2 011',
                'nama' => 'Farizah Latief, HS, S.STP',
                'jabatan' => 'Lurah Kelurahan Mangalli',
                'image' => 'assets/default-user.jpg',
            ],
            [
                'nip' => '19700527 200604 1 005',
                'nama' => 'Idham Yakub, SE, MM',
                'jabatan' => 'Sekretaris Lurah',
                'image' => 'assets/default-user.jpg',
            ],
            [
                'nip' => '',
                'nama' => 'BHABIN KAMTIBNAS BABINSA PLKB',
                'jabatan' => 'Bhabin Kamtibmas',
                'image' => 'assets/default-user.jpg',
            ],

            [
                'nip' => '19850331 201101 2 031',
                'nama' => 'A. Kurniasih Kaharuddin, S.AB',
                'jabatan' => 'Kasi Pemberdayaan dan Pelayanan Masyarakat',
                'image' => 'assets/default-user.jpg',
            ],
            [
                'nip' => '19700527 200604 1 005',
                'nama' => 'Muhammad Ramli, SE',
                'jabatan' => 'Kasi Pemerintahan',
                'image' => 'assets/default-user.jpg',
            ],
            [
                'nip' => '19721231 200701 1 057',
                'nama' => 'Bahtiar, S.Sos',
                'jabatan' => 'Kasi Trantib',
                'image' => 'assets/default-user.jpg',
            ],
            [
                'nip' => '19860625 200604 2 001',
                'nama' => 'Sri Wahyuni Kusuma',
                'jabatan' => 'Bendahara Pengeluaran Pembantu',
                'image' => 'assets/default-user.jpg',
            ],
            [
                'nip' => '',
                'nama' => 'Syahruddin Mala',
                'jabatan' => 'Kepala Lingkungan Allatappampang',
                'image' => 'assets/default-user.jpg',
            ],
            [
                'nip' => '',
                'nama' => 'M. Irsyad Wahyuddin Hamid, S.Sos',
                'jabatan' => 'Kepala Lingkungan Mangalli',
                'image' => 'assets/default-user.jpg',
            ],
            [
                'nip' => '',
                'nama' => 'Hardianto R',
                'jabatan' => 'Kepala Lingkungan Kalegowa',
                'image' => 'assets/default-user.jpg',
            ],
        ];

        $penduduk = [
            [

                'label' => 'penduduk',
                'count' => '895',
            ],
            [

                'label' => 'Laki laki',
                'count' => '420',
            ],
            [
                'label' => 'Perempuan',
                'count' => '475',
            ],
            [
                'label' => 'Kepala Keluarga',
                'count' => '291',
            ],

        ];

        $berita = [
            [
                'link' => '#',
                'image' => '/assets/banner-1.jpeg',
                'judul' => 'Kelurahan Mangalli Mengadakan Festival Budaya Tahunan',
                'tanggal' => 'August 12, 2023',
            ],
            [
                'link' => '#',
                'image' => '/assets/banner-2.jpeg',
                'judul' => 'Pelatihan UMKM untuk Meningkatkan Ekonomi Masyarakat',
                'tanggal' => 'September 03, 2023'
            ],
            [
                'link' => '#',
                'image' => '/assets/banner-3.jpeg',
                'judul' => 'Gotong Royong Membersihkan Lingkungan Desa',
                'tanggal' => 'October 20, 2023'
            ],


        ];


        return view('welcome', compact('aparat', 'penduduk', 'berita'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function galeri()
    {
        $kegiatan = [
            [
                'judul' => 'Gotong Royong Membersihkan Lingkungan Desa',
                'deskripsi' => 'Gotong Royong Membersihkan Lingkungan Desa',
                'image' => '/assets/banner-1.jpeg',
                'type' => 'image',
            ],
            [
                'judul' => 'Pelatihan UMKM untuk Warga Desa',
                'deskripsi' => 'Program pelatihan UMKM guna meningkatkan keterampilan ekonomi masyarakat.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Peringatan Hari Kemerdekaan',
                'deskripsi' => 'Kegiatan lomba dan upacara dalam rangka memperingati Hari Kemerdekaan.',
                'image' => '/assets/default-user.jpg',
                'type' => 'video',

            ],
            [
                'judul' => 'Penyuluhan Kesehatan oleh Puskesmas',
                'deskripsi' => 'Sosialisasi kesehatan dan pemeriksaan gratis bagi warga.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Penghijauan dan Penanaman Pohon',
                'deskripsi' => 'Penanaman pohon di area umum untuk menjaga kelestarian lingkungan.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Kerja Bakti Membersihkan Saluran Air',
                'deskripsi' => 'Pembersihan saluran air untuk mencegah banjir.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Pengajian Akbar Desa',
                'deskripsi' => 'Pengajian bersama guna mempererat silaturahmi antarwarga.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Pelatihan Teknologi Informasi',
                'deskripsi' => 'Pelatihan dasar komputer bagi pemuda desa.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Senam Pagi Bersama',
                'deskripsi' => 'Kegiatan olahraga rutin untuk meningkatkan kebugaran warga.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Lomba Kebersihan Antar RT',
                'deskripsi' => 'Kompetisi kebersihan untuk mendorong budaya hidup bersih.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
        ];

        return view('galeri', compact('kegiatan'));
    }
    public function berita()
    {
        $berita = [
            [
                'judul' => 'Gotong Royong Membersihkan Lingkungan Desa',
                'deskripsi' => 'Gotong Royong Membersihkan Lingkungan Desa',
                'image' => '/assets/banner-1.jpeg',
                'type' => 'image',
            ],
            [
                'judul' => 'Pelatihan UMKM untuk Warga Desa',
                'deskripsi' => 'Program pelatihan UMKM guna meningkatkan keterampilan ekonomi masyarakat.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Peringatan Hari Kemerdekaan',
                'deskripsi' => 'Kegiatan lomba dan upacara dalam rangka memperingati Hari Kemerdekaan.',
                'image' => '/assets/default-user.jpg',
                'type' => 'video',

            ],
            [
                'judul' => 'Penyuluhan Kesehatan oleh Puskesmas',
                'deskripsi' => 'Sosialisasi kesehatan dan pemeriksaan gratis bagi warga.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Penghijauan dan Penanaman Pohon',
                'deskripsi' => 'Penanaman pohon di area umum untuk menjaga kelestarian lingkungan.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Kerja Bakti Membersihkan Saluran Air',
                'deskripsi' => 'Pembersihan saluran air untuk mencegah banjir.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Pengajian Akbar Desa',
                'deskripsi' => 'Pengajian bersama guna mempererat silaturahmi antarwarga.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Pelatihan Teknologi Informasi',
                'deskripsi' => 'Pelatihan dasar komputer bagi pemuda desa.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Senam Pagi Bersama',
                'deskripsi' => 'Kegiatan olahraga rutin untuk meningkatkan kebugaran warga.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Lomba Kebersihan Antar RT',
                'deskripsi' => 'Kompetisi kebersihan untuk mendorong budaya hidup bersih.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
        ];
        return view('berita', compact('berita'));
    }

    public function beritaDetail($id)
    {
        $berita = [
            'judul' => 'Gotong Royong Membersihkan Lingkungan Desa',
            'deskripsi' => 'Gotong Royong Membersihkan Lingkungan Desa',
            'image' => '/assets/banner-1.jpeg',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, minima deleniti sint totam pariatur illum. Eligendi, ducimus velit iusto fugiat corrupti sapiente soluta nihil voluptas consequuntur sequi? Eveniet, cumque exercitationem aperiam architecto delectus porro tenetur? Neque doloremque obcaecati impedit? Nostrum, ratione cumque at quo quidem consequuntur repudiandae accusantium qui unde?',
        ];



        $beritaLainnya = [
            [
                'judul' => 'Gotong Royong Membersihkan Lingkungan Desa',
                'deskripsi' => 'Gotong Royong Membersihkan Lingkungan Desa',
                'image' => '/assets/banner-1.jpeg',
                'type' => 'image',
            ],
            [
                'judul' => 'Pelatihan UMKM untuk Warga Desa',
                'deskripsi' => 'Program pelatihan UMKM guna meningkatkan keterampilan ekonomi masyarakat.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Peringatan Hari Kemerdekaan',
                'deskripsi' => 'Kegiatan lomba dan upacara dalam rangka memperingati Hari Kemerdekaan.',
                'image' => '/assets/default-user.jpg',
                'type' => 'video',

            ],
            [
                'judul' => 'Penyuluhan Kesehatan oleh Puskesmas',
                'deskripsi' => 'Sosialisasi kesehatan dan pemeriksaan gratis bagi warga.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Penghijauan dan Penanaman Pohon',
                'deskripsi' => 'Penanaman pohon di area umum untuk menjaga kelestarian lingkungan.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Kerja Bakti Membersihkan Saluran Air',
                'deskripsi' => 'Pembersihan saluran air untuk mencegah banjir.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Pengajian Akbar Desa',
                'deskripsi' => 'Pengajian bersama guna mempererat silaturahmi antarwarga.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Pelatihan Teknologi Informasi',
                'deskripsi' => 'Pelatihan dasar komputer bagi pemuda desa.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Senam Pagi Bersama',
                'deskripsi' => 'Kegiatan olahraga rutin untuk meningkatkan kebugaran warga.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
            [
                'judul' => 'Lomba Kebersihan Antar RT',
                'deskripsi' => 'Kompetisi kebersihan untuk mendorong budaya hidup bersih.',
                'image' => '/assets/default-user.jpg',
                'type' => 'image',

            ],
        ];
        return view('berita-detail', compact('berita', 'beritaLainnya'));
    }
}
