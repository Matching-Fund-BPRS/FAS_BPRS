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
        Schema::create('t_rugilaba', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->smallInteger('PERIODE')->nullable();
            $table->date('TGL_PERIODE')->nullable();
            $table->double('PENJUALAN_BERSIH')->nullable();
            $table->double('HPP')->nullable();
            $table->double('BIAYA_PEGAWAI')->nullable();
            $table->double('BIAYA_TRANSPORT')->nullable();
            $table->double('BIAYA_LISTRIK')->nullable();
            $table->double('BIAYA_TELPON')->nullable();
            $table->double('BIAYA_PAM')->nullable();
            $table->double('BIAYA_LAIN')->nullable();
            $table->double('BIAYA_HIDUP')->nullable();
            $table->double('PENYUSUTAN')->nullable();
            $table->double('PENDAPATAN_LAIN')->nullable();
            $table->double('BIAYA_BUNGA')->nullable();
            $table->double('BIAYA_PAJAK')->nullable();
            $table->double('SET_ASSET')->nullable();
            $table->double('SET_BIAYA')->nullable();
            $table->double('SET_HPP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_rugilaba');
    }
};
