<?php

namespace App\Models;

use App\Enum\JenisKelaminEnum;
use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
    protected $fillable = [
        'no_kk',
        'nik',
        'nama_lengkap',
        'jenis_kelamin',
        'tanggal_lahir',
        'status_keluarga_id',
        'status_kawin_id',
        'agama_id',
        'pendidikan_id',
        'pekerjaan_id',
        'penghasilan_bulanan',
    ];

    protected $casts = [
        'jenis_kelamin' => JenisKelaminEnum::class
    ];

    // Define relationships if necessary
    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }



    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function statusKawin()
    {
        return $this->belongsTo(StatusKawin::class);
    }

    public function statusKeluarga()
    {
        return $this->belongsTo(StatusKeluarga::class);
    }

    public static function usiaDistribution()
    {
        $data = DataPenduduk::selectRaw("
        SUM(CASE WHEN usia BETWEEN 0 AND 4 THEN 1 ELSE 0 END) AS usia_0_4,
        SUM(CASE WHEN usia BETWEEN 5 AND 9 THEN 1 ELSE 0 END) AS usia_5_9,
        SUM(CASE WHEN usia BETWEEN 10 AND 14 THEN 1 ELSE 0 END) AS usia_10_14,
        SUM(CASE WHEN usia BETWEEN 15 AND 19 THEN 1 ELSE 0 END) AS usia_15_19,
        SUM(CASE WHEN usia BETWEEN 20 AND 24 THEN 1 ELSE 0 END) AS usia_20_24,
        SUM(CASE WHEN usia BETWEEN 25 AND 29 THEN 1 ELSE 0 END) AS usia_25_29,
        SUM(CASE WHEN usia BETWEEN 30 AND 34 THEN 1 ELSE 0 END) AS usia_30_34,
        SUM(CASE WHEN usia BETWEEN 35 AND 39 THEN 1 ELSE 0 END) AS usia_35_39,
        SUM(CASE WHEN usia BETWEEN 40 AND 44 THEN 1 ELSE 0 END) AS usia_40_44,
        SUM(CASE WHEN usia BETWEEN 45 AND 49 THEN 1 ELSE 0 END) AS usia_45_49,
        SUM(CASE WHEN usia BETWEEN 50 AND 54 THEN 1 ELSE 0 END) AS usia_50_54,
        SUM(CASE WHEN usia BETWEEN 55 AND 59 THEN 1 ELSE 0 END) AS usia_55_59,
        SUM(CASE WHEN usia BETWEEN 60 AND 69 THEN 1 ELSE 0 END) AS usia_60_69,
        SUM(CASE WHEN usia BETWEEN 70 AND 74 THEN 1 ELSE 0 END) AS usia_70_74,
        SUM(CASE WHEN usia >= 75 THEN 1 ELSE 0 END) AS usia_75_plus
    ")
            ->fromSub(function ($query) {
                $query->selectRaw("
            TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS usia
        ")
                    ->from('data_penduduks')
                    ->whereNotNull('tanggal_lahir');
            }, 'usia_table')
            ->first();

        return [
            (int) $data->usia_0_4,
            (int) $data->usia_5_9,
            (int) $data->usia_10_14,
            (int) $data->usia_15_19,
            (int) $data->usia_20_24,
            (int) $data->usia_25_29,
            (int) $data->usia_30_34,
            (int) $data->usia_35_39,
            (int) $data->usia_40_44,
            (int) $data->usia_45_49,
            (int) $data->usia_50_54,
            (int) $data->usia_55_59,
            (int) $data->usia_60_69,
            (int) $data->usia_70_74,
            (int) $data->usia_75_plus,
        ];
    }
}
