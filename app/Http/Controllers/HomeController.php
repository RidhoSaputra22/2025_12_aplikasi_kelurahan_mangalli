<?php

namespace App\Http\Controllers;

use App\Models\BeritaDesa;
use App\Models\GaleriDesa;
use App\Models\AparaturDesa;
use App\Models\ProfilDesa;
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
            'total'  => DataPenduduk::count(),
            'laki' => DataPenduduk::where('jenis_kelamin', JenisKelaminEnum::L)->count(),
            'perempuan' => DataPenduduk::where('jenis_kelamin', JenisKelaminEnum::P)->count(),
            'kk'  => DataPenduduk::distinct('no_kk')->count(),
        ];

        $profileDesa = ProfilDesa::first();

        $berita = BeritaDesa::take(3)->get();

        return view('welcome', compact('aparat', 'penduduk', 'berita', 'profileDesa'));
    }

    public function profile()
    {
        $profileDesa = ProfilDesa::first();

        return view('profile', compact('profileDesa'));
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
