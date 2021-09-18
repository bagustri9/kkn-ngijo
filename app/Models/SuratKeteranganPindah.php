<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeteranganPindah extends Model
{
    protected $fillable = [
        "no_surat",
        "warga_nik",
        "nama",
        "jenis_kelamin",
        "tempat_lahir",
        "tanggal_lahir",
        "agama",
        "status_perkawinan",
        "pekerjaan",
        "alamat",
        "RT",
        "RW",
        "jalan",
        "desa_kelurahan",
        "kecamatan",
        "kabupaten_kota",
        "provinsi",
        "kode_pos",
        "alasan_pindah",
        "keterangan",
    ];
}
