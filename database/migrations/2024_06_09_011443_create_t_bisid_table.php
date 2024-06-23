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
        Schema::create('t_bisid', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->string('SEKTOR_EKONOMI_BI', 4)->nullable();
            $table->string('PENGGUNAAN_BI', 4)->nullable();
            $table->string('GOL_DEB_BI', 4)->nullable();
            $table->string('SIFAT_BI', 4)->nullable();
            $table->string('GOL_PENJAMIN_BI', 4)->nullable();
            $table->string('TUJUAN_BI', 4)->nullable();
            $table->string('GOL_PIUTANG_BI', 4)->nullable();
            $table->string('SIFAT_PLAFOND', 4)->nullable();
            $table->string('SEK_EKO_SID', 4)->nullable();
            $table->string('PENGGUNAAN_SID', 4)->nullable();
            $table->string('PEMBIAYAAN_SID', 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bisid');
    }
};
