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
        Schema::create('t_kualitatif', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->integer('LEG_PENDIRIAN')->nullable();
            $table->string('LEG_PENDIRIAN_NO', 50)->nullable();
            $table->integer('LEG_USAHA')->nullable();
            $table->string('LEG_USAHA_NO', 50)->nullable();
            $table->integer('LEG_PEMOHON')->nullable();
            $table->string('LEG_PEMOHON_NO', 50)->nullable();
            $table->integer('LEG_LAIN1')->nullable();
            $table->string('LEG_LAIN1_NO', 50)->nullable();
            $table->integer('LEG_LAIN2')->nullable();
            $table->string('LEG_LAIN2_NO', 50)->nullable();
            $table->integer('LEG_LAIN3')->nullable();
            $table->string('LEG_LAIN3_NO', 50)->nullable();
            $table->integer('PEM_PESAING')->nullable();
            $table->integer('PEM_REPUTASI')->nullable();
            $table->integer('PEM_PELANGGAN')->nullable();
            $table->integer('PEM_KETERGANTUNGAN')->nullable();
            $table->integer('PEM_KEBUTUHAN')->nullable();
            $table->integer('MAN_KEJUJURAN')->nullable();
            $table->integer('MAN_KEMAUAN')->nullable();
            $table->integer('MAN_REPUTASI')->nullable();
            $table->integer('TEH_UTILISASI')->nullable();
            $table->integer('TEH_PENGADAAN')->nullable();
            $table->integer('TES_REPUTASI')->nullable();
            $table->integer('TEH_KETERGANTUNGAN')->nullable();
            $table->integer('TEH_SPESIFIKASI')->nullable();
            $table->integer('TEH_LAMA_USAHA')->nullable();
            $table->date('TGL_PENDIRIAN')->nullable();
            $table->date('TGL_USAHA')->nullable();
            $table->dateTime('TGL_PEMOHON')->nullable();
            $table->date('TGL_LAIN1')->nullable();
            $table->date('TGL_LAIN2')->nullable();
            $table->date('TGL_LAIN3')->nullable();
            $table->string('NPWP', 50)->nullable();
            $table->date('NPWP_TGL')->nullable();
            $table->string('TDP', 50)->nullable();
            $table->dateTime('TDP_TGL')->nullable();
            $table->string('SITU', 50)->nullable();
            $table->date('SITU_TGL')->nullable();
            $table->string('IJIN_HO', 50)->nullable();
            $table->date('HO_TGL')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_kualitatif');
    }
};
