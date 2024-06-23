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
        Schema::create('t_fas', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->nullable()->index('fk_t_fas_ID_NASABAH');
            $table->string('KODE', 3)->nullable();
            $table->string('BANK')->nullable();
            $table->string('JENIS_KREDIT', 1)->nullable();
            $table->double('PLAFOND')->nullable();
            $table->double('BAKI_DEBET')->nullable();
            $table->date('TGL_JATUH_TEMPO')->nullable();
            $table->string('KOL', 1)->nullable();
            $table->integer('TUNGGAKAN')->nullable();
            $table->string('LAMA_TUNGGAKAN')->nullable();
            $table->string('KET')->nullable();
            $table->integer('ID', true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_fas');
    }
};
