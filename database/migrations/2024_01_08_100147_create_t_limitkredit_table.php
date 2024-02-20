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
        Schema::create('t_limitkredit', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->double('LIMIT_KREDIT')->nullable();
            $table->integer('JANGKA_WAKTU')->nullable();
            $table->double('OMSET')->nullable();
            $table->double('HPP')->nullable();
            $table->double('BIAYA_HIDUP')->nullable();
            $table->double('ANGS_BANK_LAIN')->nullable();
            $table->double('BUNGA_KREDIT')->nullable();
            $table->double('ANGSURAN')->nullable();
            $table->double('PEND_LAIN')->nullable();
            $table->double('RPC')->nullable();
            $table->string('JENIS', 1)->nullable();
            $table->double('BIAYA_LAIN')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_limitkredit');
    }
};
