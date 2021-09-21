<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaKKSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_k_k_s', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kartu_keluarga');
            $table->string("nama");
            $table->string("jenis_kelamin");
            $table->string("hubungan_keluarga");
            $table->integer("anak_ke");
            $table->string("nomor_akta");
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->string("status_kawin");
            $table->string("nomor_tanggal_akta_kawin_cerai");
            $table->string("agama");
            $table->string("golongan_darah");
            $table->string("pendidikan_terakhir");
            $table->string("tempat_tanggal_lahir");
            $table->string("nomor_dan_tanggal_surat_pindah");
            $table->string("kelainan_khusus");
            $table->string("akseptor_KB");
            $table->string("nama_ibu");
            $table->string("nik_ibu");
            $table->string("nama_ayah");
            $table->string("nik_ayah");
            $table->string("tempat_tinggal");
            $table->string("keterangan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota_k_k_s');
    }
}
