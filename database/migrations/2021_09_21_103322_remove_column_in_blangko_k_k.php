<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnInBlangkoKK extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blangko_k_k_s', function (Blueprint $table) {
            $table->dropColumn([
                "warga_nik",
                "no_surat",
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
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blangko_k_k', function (Blueprint $table) {
            //
        });
    }
}
