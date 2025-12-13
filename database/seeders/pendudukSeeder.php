<?php

namespace Database\Seeders;

use App\Enum\JenisKelaminEnum;
use App\Models\Agama;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\StatusKawin;
use App\Models\DataPenduduk;
use App\Models\StatusKeluarga;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class pendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $n_data = 50;

        for ($i = 0; $i < $n_data; $i++) {
            DataPenduduk::create([
                'no_kk' => fake()->nik(),
                'nik' => fake()->nik(),
                'nama_lengkap' => fake()->name(),
                'jenis_kelamin' => JenisKelaminEnum::values()[rand(0, 1)],
                'tanggal_lahir' => fake()->dateTimeThisDecade(),
                'status_keluarga_id' => StatusKeluarga::all()->random()->id,
                'status_kawin_id' => StatusKawin::all()->random()->id,
                'agama_id' => Agama::all()->random()->id,
                'pendidikan_id' => Pendidikan::all()->random()->id,
                'pekerjaan_id' => Pekerjaan::all()->random()->id,
                'penghasilan_bulanan' => fake()->randomNumber(5),

            ]);
        }
    }
}
