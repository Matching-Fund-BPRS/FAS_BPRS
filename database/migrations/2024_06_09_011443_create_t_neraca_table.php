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
        Schema::create('t_neraca', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->smallInteger('PERIODE')->nullable();
            $table->dateTime('TANGGAL_PERIODE')->nullable();
            $table->double('KAS')->nullable();
            $table->double('PIUTANG_DAGANG')->nullable();
            $table->double('PERSEDIAAN')->nullable();
            $table->double('TANAH')->nullable();
            $table->double('GEDUNG')->nullable();
            $table->double('PENYUSUTAN_GED')->nullable();
            $table->double('PERALATAN')->nullable();
            $table->double('PENYUSUTAN_PERALATAN')->nullable();
            $table->double('HUTANG_JANGKA_PENDEK')->nullable();
            $table->double('HUTANG_JANGKA_PANJANG')->nullable();
            $table->double('MODAL')->nullable();
            $table->double('LABA_DITAHAN')->nullable();
            $table->double('LABA_BERJALAN')->nullable();
            $table->double('LABA_BERJALAN_2')->nullable();
            $table->double('LABA_BERJALAN_3')->nullable();
            $table->double('SET_ASSET')->nullable();
            $table->double('EBIT')->nullable();
            $table->double('OIS')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_neraca');
    }
};
