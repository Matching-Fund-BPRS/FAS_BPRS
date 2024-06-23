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
        Schema::create('t_agunan', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('ID_NASABAH', 10)->nullable()->index('fk_t_agunan_ID_NASABAH');
            $table->string('JENIS', 2)->nullable();
            $table->string('BUKTI_MILIK', 1)->nullable();
            $table->string('MERK')->nullable();
            $table->smallInteger('TAHUN')->nullable();
            $table->string('NO_BPKB', 20)->nullable();
            $table->string('NOPOL', 10)->nullable();
            $table->string('NO_MESIN', 20)->nullable();
            $table->string('NO_RANGKA', 20)->nullable();
            $table->string('WARNA', 20)->nullable();
            $table->string('ATAS_NAMA', 100)->nullable();
            $table->string('ALAMAT')->nullable();
            $table->date('TGL_BERLAKU')->nullable();
            $table->string('NO_AGUNAN', 50)->nullable();
            $table->string('NAMA_PEMILIK', 50)->nullable();
            $table->string('LOKASI', 100)->nullable();
            $table->double('NILAI')->nullable();
            $table->string('JENIS_PENGIKATAN', 1)->nullable();
            $table->string('ASURANSI', 1)->nullable();
            $table->mediumText('KET')->nullable();
            $table->string('LUAS_TANAH', 50)->nullable();
            $table->string('LUAS_BANGUNAN', 50)->nullable();
            $table->string('NO_DEP', 50)->nullable();
            $table->string('DEP_BANK', 75)->nullable();
            $table->double('SAVE_MARGIN')->nullable();
            $table->string('JENIS_BANGUNAN', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_agunan');
    }
};
