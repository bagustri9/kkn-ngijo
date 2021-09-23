<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeteranganBiodataPenduduk extends Model
{
    protected $fillable = [
        "no_surat",
        'warga_nik',
        'no_kartu_keluarga',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        "agama",
        "status_perkawinan",
        "pekerjaan",
        "alamat",
        "RT",
        "RW",
        "dusun",
        "hubungan_dalam_keluarga",
        "penyandang_disabilitas",
        "nama_lengkap_ibu",
        "nik_ibu",
        "nama_lengkap_ayah",
        "nik_ayah",
        "goldar",
        "keterangan",
    ];
}
