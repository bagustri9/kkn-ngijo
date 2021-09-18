<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeteranganBedaNama extends Model
{
    protected $fillable = [
        "no_surat",
        "warga_nik",
        "nama",
        "jenis_kelamin",
        "tempat_lahir",
        'tanggal_lahir',
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
