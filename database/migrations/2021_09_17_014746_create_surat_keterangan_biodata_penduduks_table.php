<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeteranganBiodataPenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keterangan_biodata_penduduks', function (Blueprint $table) {
            $table->id();
            $table->string("no_surat");
            $table->string('warga_nik');
            $table->string('no_kartu_keluarga');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string("agama");
            $table->string("status_perkawinan");
            $table->string("pekerjaan");
            $table->string("alamat");
            $table->integer("RT");
            $table->integer("RW");
            $table->string("dusun");
            $table->string("hubungan_dalam_keluarga");
            $table->string("penyandang_disabilitas");
            $table->string("nama_lengkap_ibu");
            $table->string("nik_ibu");
            $table->string("nama_lengkap_ayah");
            $table->string("nik_ayah");
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
        Schema::dropIfExists('surat_keterangan_biodata_penduduks');
    }
}
