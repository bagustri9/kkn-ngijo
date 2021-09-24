<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnggotaKK extends Model
{
    protected $fillable = [
        'nomor_kartu_keluarga',
        "nama",
        "jenis_kelamin",
        "hubungan_keluarga",
        "anak_ke",
        "nomor_akta",
        "tempat_lahir",
        "tanggal_lahir",
        "status_kawin",
        "nomor_tanggal_akta_kawin_cerai",
        "agama",
        "golongan_darah",
        "pendidikan_terakhir",
        "tempat_tanggal_lahir",
        "nomor_dan_tanggal_surat_pindah",
        "kelainan_khusus",
        "akseptor_KB",
        "nama_ibu",
        "nik_ibu",
        "nama_ayah",
        "nik_ayah",
        "tempat_tinggal",
        "keterangan",
        'status_pendidikan',
        "kelompok_pekerjaan",
        "nomor_tanggal_akta_lahir"
    ];
}
