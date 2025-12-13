<?php

use App\Enum\TypeFileEnum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('galeri_desas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('file');
            $table->enum('type', TypeFileEnum::values())->default(TypeFileEnum::IMAGE);
            $table->timestamps();
        });

        DB::table('galeri_desas')->insert([
            [
                'judul' => 'Gotong Royong Membersihkan Lingkungan Desa',
                'deskripsi' => 'Kegiatan gotong royong warga membersihkan lingkungan desa.',
                'file' => 'banner-1.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'Kerja Bakti Jumat Bersih',
                'deskripsi' => 'Warga desa melakukan kerja bakti rutin setiap hari Jumat.',
                'file' => 'banner-2.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'Video Kerja Bakti',
                'deskripsi' => 'Dokumentasi video kerja bakti warga.',
                'file' => 'video-kerja-bakti.mp4',
                'type' => TypeFileEnum::VIDEO,
            ],
            [
                'judul' => 'Musyawarah Desa',
                'deskripsi' => 'Rapat musyawarah desa membahas pembangunan.',
                'file' => 'banner-3.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'Pelatihan UMKM Desa',
                'deskripsi' => 'Pelatihan pengembangan UMKM bagi warga desa.',
                'file' => 'banner-4.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'Video Musyawarah Desa',
                'deskripsi' => 'Rekaman kegiatan musyawarah desa.',
                'file' => 'video-musyawarah.mp4',
                'type' => TypeFileEnum::VIDEO,
            ],
            [
                'judul' => 'Peringatan Hari Kemerdekaan',
                'deskripsi' => 'Perayaan HUT RI di lingkungan desa.',
                'file' => 'banner-5.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'TEST VIDEO KEGIATAN DESA',
                'deskripsi' => 'Video dokumentasi kegiatan desa.',
                'file' => '01KCC3HVT3GCMV1J3DRXVSS7TZ.mp4',
                'type' => TypeFileEnum::VIDEO,
            ],

            [
                'judul' => 'Kegiatan Posyandu',
                'deskripsi' => 'Pelayanan kesehatan ibu dan anak di desa.',
                'file' => 'banner-6.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'Video Peringatan HUT RI',
                'deskripsi' => 'Video lomba dan hiburan HUT RI.',
                'file' => 'video-hut-ri.mp4',
                'type' => TypeFileEnum::VIDEO,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri_desas');
    }
};
