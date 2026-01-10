<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    protected $fillable = [
        'logo_desa',
        'nama_desa',
        'sejarah_desa',
        'sambutan',
        'visi',
        'misi',
        'alamat',
        'kode_pos',
        'telepon',
        'email'
    ];
}
