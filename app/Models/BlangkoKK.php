<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlangkoKK extends Model
{
    protected $fillable = [
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
    ];
}
