<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $fillable = [
        'nik',
        'nomor_kk',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'dusun',
        'rt',
        'rw',
        'nomor_rumah',
        'agama',
        'status',
        'shdrt',
        'pendidikan',
        'pekerjaan',
        'ibu',
        'ayah'
    ];
}
