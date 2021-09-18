<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengikut extends Model
{
    protected $fillable = [
        "surat_keterangan_pindah_no_surat",
        "nama_lengkap",
        "jenis_kelamin",
        "umur",
        "status_perkawinan",
        "pendidikan",
        "no_ktp",
        "keterangan",
    ];
}
