<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToAnggotaKKS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anggota_k_k_s', function (Blueprint $table) {
            $table->string("status_pendidikan");
            $table->string("kelompok_pekerjaan");
            $table->string("nomor_tanggal_akta_lahir");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anggota_k_k_s', function (Blueprint $table) {
            $table->dropColumn([
                "status_pendidikan",
                "kelompok_pekerjaan",
                "nomor_tanggal_akta_lahir"
            ]);
        });
    }
}
