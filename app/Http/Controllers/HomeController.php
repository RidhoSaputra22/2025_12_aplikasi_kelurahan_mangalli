<?php

namespace App\Http\Controllers;

use App\Enum\JenisKelaminEnum;
use App\Models\BeritaDesa;
use App\Models\AparaturDesa;
use App\Models\DataPenduduk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function welcome()
    {
        $aparat = AparaturDesa::all();

        $penduduk = [
            [
                'label' => 'penduduk',
                'count' => DataPenduduk::count(),
            ],
            [

                'label' => 'Laki laki',
                'count' => DataPenduduk::where('jenis_kelamin', JenisKelaminEnum::L)->count(),
            ],
            [
                'label' => 'Perempuan',
                'count' => DataPenduduk::where('jenis_kelamin', JenisKelaminEnum::P)->count(),
            ],
            [
                'label' => 'Kepala Keluarga',
                'count' => DataPenduduk::distinct('no_kk')->count(),
            ],
        ];

        $berita = BeritaDesa::take(3)->get();

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
