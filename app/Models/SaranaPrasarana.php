<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class SaranaPrasarana extends Model
{
    //
    protected $fillable = [
        'nama_sarana',
        'jenis_sarana',
        'kondisi_sarana',
        'kapasitas_sarana',
        'lokasi_sarana',
        'foto_sarana',
        'keterangan',
    ];

    public static function chartSarana()
    {
        $data = SaranaPrasarana::select(
            'nama_sarana',
            'kapasitas_sarana'
        )
            ->orderBy('nama_sarana')
            ->get();

        return [
            'labels' => $data->pluck('nama_sarana'),
            'datasets' => [
                [
                    'data' => $data->pluck('kapasitas_sarana'),
                    'labelFormated' => $data->pluck('nama_sarana'),
                    'valueFormated' => $data->map(
                        fn($item) => $item->kapasitas_sarana . ' orang'
                    ),
                    'percentase' => $data->map(
                        fn($item) => $item->kapasitas_sarana . ' orang'
                    ),
                    'backgroundColor' => '#015CB9',
                ]
            ]
        ];
    }
}
