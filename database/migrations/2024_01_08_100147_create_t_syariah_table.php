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
        Schema::create('t_syariah', function (Blueprint $table) {
            $table->integer('SY_SERTIFIKASI_HALAL')->nullable();
            $table->decimal('SY_JUMLAH_HUTANG', 20, 1)->nullable();
            $table->integer('SY_AKAD_USAHA')->nullable();
            $table->integer('SY_JENIS_BARANG')->nullable();
            $table->decimal('SY_PRESENTASE_NON_SYARIAH', 9)->nullable();
            $table->string('ID_NASABAH', 10)->nullable()->index('fk_t_syariah_ID_NASABAH');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_syariah');
    }
};
