<?php

namespace App\Http\Controllers;

use App\Models\BeritaDesa;
use App\Models\GaleriDesa;
use App\Models\AparaturDesa;
use App\Models\DataPenduduk;
use Illuminate\Http\Request;
use App\Enum\JenisKelaminEnum;
use App\Enum\TypeFileEnum;


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
        $kegiatan = GaleriDesa::paginate(6);

        return view('galeri', compact('kegiatan'));
    }
    public function berita()
    {
        $berita = BeritaDesa::latest()->paginate(6);
        return view('berita', compact('berita'));
    }

    public function beritaDetail($slug)
    {
        $berita = BeritaDesa::where('slug', $slug)->firstOrFail();



        $beritaLainnya = BeritaDesa::latest()->take(5)->get();
        return view('berita-detail', compact('berita', 'beritaLainnya'));
    }
}
