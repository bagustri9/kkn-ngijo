<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKepemilikanDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kepemilikan_dokumens', function (Blueprint $table) {
            $table->id();
            $table->string('surat_keterangan_biodata_penduduk_no_surat');
            $table->string('no_paspor');
            $table->date('tanggal_berakhir_paspor');
            $table->string('no_akta_kelahiran');
            $table->date('tanggal_cetak_akta_kelahiran');
            $table->string('no_akta_perkawinan');
            $table->date('tanggal_cetak_akta_perkawinan');
            $table->string('no_akta_cerai');
            $table->date('tanggal_cetak_akta_cerai');
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
        Schema::dropIfExists('data_kepemilikan_dokumens');
    }
}
