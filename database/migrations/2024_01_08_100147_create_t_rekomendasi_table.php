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
        Schema::create('t_rekomendasi', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->double('LIMIT_KREDIT')->nullable();
            $table->string('SIFAT_KREDIT', 1)->nullable();
            $table->string('JENIS_PERMOHONAN', 1)->nullable();
            $table->string('TUJUAN', 1)->nullable();
            $table->integer('JANGKA_WAKTU')->nullable();
            $table->double('BUNGA')->nullable();
            $table->double('ANGSURAN')->nullable();
            $table->mediumText('JAMINAN')->nullable();
            $table->string('KETENTUAN')->nullable();
            $table->double('PROVISI')->nullable();
            $table->double('ADMINISTRASI')->nullable();
            $table->double('LAINNYA')->nullable();
            $table->integer('BAYAR_POKOK')->nullable();
            $table->double('MATERAI')->nullable();
            $table->double('NOTARIS')->nullable();
            $table->double('ASURANSI')->nullable();
            $table->double('MODAL')->nullable();
            $table->double('BASIL_BANK')->nullable();
            $table->double('BASIL_DEB')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_rekomendasi');
    }
};
