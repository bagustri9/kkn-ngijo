<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataKepemilikanDokumen extends Model
{
    protected $fillable = [
        'surat_keterangan_biodata_penduduk_no_surat',
        'no_paspor',
        'tanggal_berakhir_paspor',
        'no_akta_kelahiran',
        'tanggal_cetak_akta_kelahiran',
        'no_akta_perkawinan',
        'tanggal_cetak_akta_perkawinan',
        'no_akta_cerai',
        'tanggal_cetak_akta_cerai',
    ];
}
