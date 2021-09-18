<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeteranganDomisiliPenduduk extends Model
{
    protected $fillable = [
        "no_surat",
        "warga_nik",
        "nama",
        "jenis_kelamin",
        "tempat_lahir",
        "tanggal_lahir",
        "agama",
        "pekerjaan",
        "alamat",
        "RT",
        "RW",
        "dusun",
        "keterangan",
        "status_perkawinan",
    ];
}
