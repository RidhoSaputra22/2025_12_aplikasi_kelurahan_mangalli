<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sarana_prasaranas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sarana');
            $table->string('jenis_sarana');
            $table->string('kondisi_sarana');
            $table->double('kapasitas_sarana');
            $table->string('lokasi_sarana');
            $table->string('foto_sarana')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });

        DB::table('sarana_prasaranas')->insert([
            [
                'nama_sarana' => 'TK',
                'jenis_sarana' => 'Pendidikan',
                'kondisi_sarana' => 'Baik',
                'kapasitas_sarana' => 37,
                'lokasi_sarana' => 'Kelurahan',
                'foto_sarana' => null,
                'keterangan' => 'Jumlah total Taman Kanak-kanak (Negeri & Swasta).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sarana' => 'SD',
                'jenis_sarana' => 'Pendidikan',
                'kondisi_sarana' => 'Baik',
                'kapasitas_sarana' => 39,
                'lokasi_sarana' => 'Kelurahan',
                'foto_sarana' => null,
                'keterangan' => 'Jumlah total Sekolah Dasar (Negeri, Inpres & Swasta).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sarana' => 'SMP',
                'jenis_sarana' => 'Pendidikan',
                'kondisi_sarana' => 'Baik',
                'kapasitas_sarana' => 7,
                'lokasi_sarana' => 'Kelurahan',
                'foto_sarana' => null,
                'keterangan' => 'Jumlah total Sekolah Menengah Pertama.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sarana' => 'SMA',
                'jenis_sarana' => 'Pendidikan',
                'kondisi_sarana' => 'Baik',
                'kapasitas_sarana' => 3,
                'lokasi_sarana' => 'Kelurahan',
                'foto_sarana' => null,
                'keterangan' => 'Jumlah total SMA/SMK.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sarana' => 'Puskesmas',
                'jenis_sarana' => 'Kesehatan',
                'kondisi_sarana' => 'Baik',
                'kapasitas_sarana' => 2,
                'lokasi_sarana' => 'Kelurahan',
                'foto_sarana' => null,
                'keterangan' => 'Fasilitas pelayanan kesehatan tingkat kecamatan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sarana' => 'Rumah Bersalin',
                'jenis_sarana' => 'Kesehatan',
                'kondisi_sarana' => 'Baik',
                'kapasitas_sarana' => 3,
                'lokasi_sarana' => 'Kelurahan',
                'foto_sarana' => null,
                'keterangan' => 'Fasilitas persalinan bagi masyarakat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sarana' => 'Poliklinik',
                'jenis_sarana' => 'Kesehatan',
                'kondisi_sarana' => 'Baik',
                'kapasitas_sarana' => 2,
                'lokasi_sarana' => 'Kelurahan',
                'foto_sarana' => null,
                'keterangan' => 'Pelayanan kesehatan dasar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sarana' => 'Masjid dan Surau',
                'jenis_sarana' => 'Ibadah',
                'kondisi_sarana' => 'Baik',
                'kapasitas_sarana' => 9,
                'lokasi_sarana' => 'Kelurahan',
                'foto_sarana' => null,
                'keterangan' => 'Jumlah masjid dan musholla di Kelurahan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_prasaranas');
    }
};
