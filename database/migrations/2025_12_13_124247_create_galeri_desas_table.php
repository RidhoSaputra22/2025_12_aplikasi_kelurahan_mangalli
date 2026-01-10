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
                'judul' => 'Rabu Sehat',
                'deskripsi' => 'Kegiatan senam bersama yang diikuti oleh warga sebagai upaya meningkatkan kesehatan dan kebugaran jasmani.',
                'file' => 'kegiatan-1.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'Kegiatan Mengaji Bersama Warga',
                'deskripsi' => 'Kegiatan mengaji bersama yang melibatkan warga untuk memperdalam pengetahuan agama dan mempererat tali silaturahmi.',
                'file' => 'kegiatan-2.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],



            [
                'judul' => 'Seminar Program Kerja KKN Tematik',
                'deskripsi' => 'Pelaksanaan seminar program kerja KKN Tematik Angkatan 59 Universitas Bosowa bersama masyarakat dan aparat setempat sebagai sarana pemaparan rencana kegiatan serta penyerapan aspirasi warga.',
                'file' => 'kegiatan-8.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'Penyerahan Dokumen Program Kerja KKN',
                'deskripsi' => 'Kegiatan penyerahan dokumen program kerja KKN Tematik secara resmi kepada perwakilan kelurahan sebagai bentuk administrasi dan legalitas pelaksanaan kegiatan.',
                'file' => 'kegiatan-9.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'Seminar Program Kerja KKN Tematik',
                'deskripsi' => 'Pelaksanaan seminar program kerja KKN Tematik Angkatan 59 Universitas Bosowa bersama masyarakat dan aparat setempat sebagai sarana pemaparan rencana kegiatan serta penyerapan aspirasi warga.',
                'file' => 'kegiatan-10.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'Edukasi Pemilahan Sampah Sejak Dini',
                'deskripsi' => 'Kegiatan edukasi lingkungan kepada siswa sekolah dasar mengenai pemilahan sampah organik dan non-organik guna menumbuhkan kesadaran menjaga kebersihan sejak usia dini.',
                'file' => 'kegiatan-11.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'Seminar Hasil Program Kerja KKN Tematik',
                'deskripsi' => 'Dokumentasi seminar hasil program kerja KKN Tematik Angkatan 59 Universitas Bosowa yang diselenggarakan di Aula Kelurahan Mangalli sebagai bentuk pertanggungjawaban dan evaluasi kegiatan kepada masyarakat dan aparat kelurahan.s',
                'file' => 'kegiatan-12.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],

            [
                'judul' => 'Event PKK Kelurahan Mangalli',
                'deskripsi' => 'Kegiatan yang diselenggarakan oleh PKK Kelurahan Mangalli untuk memberdayakan dan meningkatkan kesejahteraan masyarakat melalui berbagai program dan kegiatan sosial.',
                'file' => 'pkkevent.jpeg',
                'type' => TypeFileEnum::IMAGE,
            ],
            [
                'judul' => 'Event PKK Kelurahan Mangalli',
                'deskripsi' => 'Kegiatan yang diselenggarakan oleh PKK Kelurahan Mangalli untuk memberdayakan dan meningkatkan kesejahteraan masyarakat melalui berbagai program dan kegiatan sosial.',
                'file' => 'pkkevent-1.jpeg',
                'type' => TypeFileEnum::IMAGE,
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
