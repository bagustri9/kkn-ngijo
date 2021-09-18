<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlangkoKKSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blangko_k_k_s', function (Blueprint $table) {
            $table->id();
            $table->string("no_surat");
            $table->string("warga_nik");
            $table->string("jenis_permohonan");
            $table->string("nama_kepala_keluarga");
            $table->string("nomor_kartu_keluarga");
            $table->integer("RT");
            $table->integer("RW");
            $table->string("jalan");
            $table->string("desa_kelurahan");
            $table->string("kecamatan");
            $table->string("kabupaten_kota");
            $table->integer("jumlah_keluarga");
            $table->string("nama");
            $table->string("jenis_kelamin");
            $table->string("hubungan_keluarga");
            $table->integer("anak_ke");
            $table->string("nomor_akta");
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->string("status_kawin");
            $table->string("nomor_tangal_akta_kawin_cerai");
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
        Schema::dropIfExists('blangko_k_k_s');
    }
}
