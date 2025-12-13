<?php

namespace App\Models;

use App\Enum\TypeFileEnum;
use Illuminate\Database\Eloquent\Model;

class GaleriDesa extends Model
{
    //

    protected $fillable = [
        'judul',
        'deskripsi',
        'file',
        'type',
    ];

    protected $casts = [
        'type' => TypeFileEnum::class,
    ];
}
