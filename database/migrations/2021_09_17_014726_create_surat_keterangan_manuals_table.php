<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeteranganManualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keterangan_manuals', function (Blueprint $table) {
            $table->id();
            $table->string("no_surat");
            $table->string("warga_nik");
            $table->string("nama");
            $table->string("jenis_kelamin");
            $table->string("tempat_lahir");
            $table->date('tanggal_lahir');
            $table->string("agama");
            $table->string("status_perkawinan");
            $table->string("pekerjaan");
            $table->string("alamat");
            $table->integer("RT");
            $table->integer("RW");
            $table->string("dusun");
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
        Schema::dropIfExists('surat_keterangan_manuals');
    }
}
