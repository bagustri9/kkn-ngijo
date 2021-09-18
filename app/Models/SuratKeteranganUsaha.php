<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeteranganUsaha extends Model
{
    protected $fillable = [
        "no_surat",
        "warga_nik",
        "nama",
        "jenis_kelamin",
        "tempat_lahir",
        "agama",
        "status_perkawinan",
        "pekerjaan",
        "alamat",
        "RT",
        "RW",
        "dusun",
        "keterangan",
    ];
}
