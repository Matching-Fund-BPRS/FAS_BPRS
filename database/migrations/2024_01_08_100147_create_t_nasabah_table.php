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
        Schema::create('t_nasabah', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->string('ID_CABANG')->nullable();
            $table->string('NO_SURVEY', 7)->nullable();
            $table->string('CIF', 20)->nullable();
            $table->date('TGL_PERMOHONAN')->nullable();
            $table->date('TGL_ANALISA')->nullable();
            $table->double('LIMIT_KREDIT')->nullable();
            $table->double('BUNGA')->nullable();
            $table->integer('JANGKA_WAKTU')->nullable();
            $table->string('SIFAT', 1)->nullable();
            $table->string('JENIS_PERMOHONAN', 1)->nullable();
            $table->string('TUJUAN', 1)->nullable();
            $table->string('KET_TUJUAN')->nullable();
            $table->string('BIDANG_USAHA', 30)->nullable();
            $table->string('SUB_USAHA', 50)->nullable();
            $table->date('TGL_MULAI_USAHA')->nullable();
            $table->integer('JUMLAH_KARY')->nullable();
            $table->string('NAMA', 50)->nullable();
            $table->string('NAMA_BADAN_USAHA', 100)->nullable();
            $table->string('ALAMAT_USAHA')->nullable();
            $table->string('STATUS_PERKAWINAN', 1)->nullable();
            $table->string('TEMPAT_LAHIR', 50)->nullable();
            $table->date('TGL_LAHIR')->nullable();
            $table->string('GENDER', 1)->nullable();
            $table->string('NO_KTP', 40)->nullable();
            $table->date('TGL_BERLAKU_KTP')->nullable();
            $table->string('ALAMAT')->nullable();
            $table->string('NO_TELP', 20)->nullable();
            $table->string('NO_KANTOR', 20)->nullable();
            $table->string('STATUS_TEMPAT_TINGGAL', 1)->nullable();
            $table->integer('LAMA_TINGGAL')->nullable();
            $table->string('TINGKAT_PENDIDIKAN', 1)->nullable();
            $table->string('JUMLAH_TANGGUNGAN', 1)->nullable();
            $table->string('NAMA_PASANGAN', 50)->nullable();
            $table->string('TEMPAT_LAHIR_PASANGAN', 50)->nullable();
            $table->date('TGL_LAHIR_PASANGAN')->nullable();
            $table->string('ALAMAT_PASANGAN')->nullable();
            $table->string('PROFESI_PASANGAN', 1)->nullable();
            $table->string('NO_TELP_PASANGAN', 20)->nullable();
            $table->string('NAMA_EC', 50)->nullable();
            $table->string('HUB_EC', 1)->nullable();
            $table->string('ALAMAT_EC', 70)->nullable();
            $table->string('NO_TELP_EC', 20)->nullable();
            $table->string('USER_ID', 30)->nullable();
            $table->date('JADI_NASABAH_SEJAK')->nullable();
            $table->string('STATUS_TEMPAT_USAHA', 30)->nullable();
            $table->string('NO_TELP_USAHA', 20)->nullable();
            $table->string('MASA_KTP', 1)->nullable();
            $table->string('JENIS_DEB', 1)->nullable();
            $table->string('BENTUK_BADAN_USAHA', 50)->nullable();
            $table->string('NO_PENDIRIAN', 30)->nullable();
            $table->date('TGL_PENDIRIAN')->nullable();
            $table->string('KONDISI_PENDIRIAN', 1)->nullable();
            $table->string('ANGGARAN', 30)->nullable();
            $table->date('TGL_ANGGARAN')->nullable();
            $table->string('KONDISI_ANGGARAN', 1)->nullable();
            $table->string('PENGURUS', 30)->nullable();
            $table->date('TGL_PENGURUS')->nullable();
            $table->string('KONDISI_PENGURUS', 1)->nullable();
            $table->string('ISI_PENDIRIAN', 50)->nullable();
            $table->string('ISI_ANGGARAN', 50)->nullable();
            $table->string('ISI_PENGURUS', 50)->nullable();

            $table->index(['ID_NASABAH'], 'idx_t_nasabah_ID_NASABAH');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_nasabah');
    }
};
