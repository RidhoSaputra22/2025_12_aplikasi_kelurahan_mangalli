<?php

use App\Models\DataPenduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/penduduk/pesebaran/usia', function (Request $request) {
    $usia = DataPenduduk::usiaDistribution();

    return response()->json([
        'labels' => [
            "Usia 0 - 4",
            "Usia 5-9",
            "Usia 10-14",
            "Usia 15-19",
            "Usia 20-24",
            "Usia 25-29",
            "Usia 30-34",
            "Usia 35-39",
            "Usia 40-44",
            "Usia 45-49",
            "Usia 50-54",
            "Usia 55-59",
            "Usia 60-69",
            "Usia 70-74",
            "Usia 75+",
        ],
        'datasets' => [
            [
                'data' => $usia,
                'backgroundColor' => '#015CB9',
                'valueFormated' => array_map(fn($v) => "{$v} jiwa", $usia),
                'percentase' => array_map(fn($v) => "{$v} jiwa", $usia),
            ]
        ]
    ]);
});
