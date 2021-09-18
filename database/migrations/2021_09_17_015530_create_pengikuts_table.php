<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengikutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengikuts', function (Blueprint $table) {
            $table->id();
            $table->string("surat_keterangan_pindah_no_surat");
            $table->string("nama_lengkap");
            $table->string("jenis_kelamin");
            $table->string("umur");
            $table->string("status_perkawinan");
            $table->string("pendidikan");
            $table->string("no_ktp");
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
        Schema::dropIfExists('pengikuts');
    }
}
