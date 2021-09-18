<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlangkoKK extends Model
{
    protected $fillable = [
        "no_surat",
        "warga_nik",
        "jenis_permohonan",
        "nama_kepala_keluarga",
        "nomor_kartu_keluarga",
        "RT",
        "RW",
        "jalan",
        "desa_kelurahan",
        "kecamatan",
        "kabupaten_kota",
        "jumlah_keluarga",
        "nama",
        "jenis_kelamin",
        "hubungan_keluarga",
        "anak_ke",
        "nomor_akta",
        "tempat_lahir",
        "tanggal_lahir",
        "status_kawin",
        "nomor_tangal_akta_kawin_cerai",
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
    ];
}
