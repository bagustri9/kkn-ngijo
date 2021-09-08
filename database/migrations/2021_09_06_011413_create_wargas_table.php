<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nomor_kk');
            $table->string('nama');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('dusun');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('nomor_rumah');
            $table->string('agama');
            $table->string('status');
            $table->string('shdrt');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('ibu');
            $table->string('ayah');
            $table->timestamps();
        });
        function addData($array)
        {
            $time = strtotime($array[5]);
            $tgl_lahir = date('Y-m-d',$time);

            return [
                'nik' => $array[0],
                'nomor_kk' => $array[1],
                'nama' => $array[2],
                'jk' => $array[3],
                'tempat_lahir' => $array[4],
                'tanggal_lahir' => $tgl_lahir,
                'dusun' => $array[6],
                'rt' => $array[7],
                'rw' => $array[8],
                'nomor_rumah' => $array[9],
                'agama' => $array[10],
                'status' => $array[11],
                'shdrt' => $array[12],
                'pendidikan' => $array[13],
                'pekerjaan' => $array[14],
                'ibu' => $array[15],
                'ayah' => $array[16],
            ];
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wargas');
    }
}
