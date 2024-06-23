<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pegawai', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->string('NAMA_PERUSAHAAN', 50)->nullable();
            $table->string('ALAMAT', 100)->nullable();
            $table->string('JENIS_PEKERJAAN', 1)->nullable();
            $table->string('STATUS_PEKERJAAN', 1)->nullable();
            $table->string('BIDANG_USAHA', 1)->nullable();
            $table->string('SKALA_USAHA', 1)->nullable();
            $table->string('JABATAN', 1)->nullable();
            $table->string('STATUS_PEGAWAI', 1)->nullable();
            $table->string('LAMA_BEKERJA', 1)->nullable();
            $table->string('NAMA_ATASAN', 50)->nullable();
            $table->string('NO_TELP_ATASAN', 20)->nullable();
            $table->string('NO_TELP_KANTOR', 20)->nullable();
            $table->string('JABATAN_ATASAN', 1)->nullable();
            $table->string('NAMA_BENDAHARA', 50)->nullable();
            $table->string('NO_TELP_BENDAHARA', 20)->nullable();
            $table->string('PENYALURAN_GAJI', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pegawai');
    }
};
