<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratPengantarPindah extends Model
{
    protected $fillable = [
        "no_surat", "warga_nik", "asal_desa", "kecamatan", "kabupaten_kota", "provinsi", "banyaknya", "keterangan"
    ];
}
