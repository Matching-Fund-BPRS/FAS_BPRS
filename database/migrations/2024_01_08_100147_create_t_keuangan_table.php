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
        Schema::create('t_keuangan', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->double('OMZET')->nullable();
            $table->double('BIAYA_GAJI')->nullable();
            $table->double('BIAYA_BB')->nullable();
            $table->double('BIAYA_STOK')->nullable();
            $table->double('BIAYA_PRODUKSI')->nullable();
            $table->double('BIAYA_TRANSPORT')->nullable();
            $table->double('BIAYA_USAHA_LAIN')->nullable();
            $table->double('BIAYA_RT_LISTRIK')->nullable();
            $table->double('BIAYA_RT_TRANSPORT')->nullable();
            $table->double('BIAYA_RT_SEKOLAH')->nullable();
            $table->double('BIAYA_RT_MAKAN')->nullable();
            $table->double('BIAYA_RT_PEMELIHARAAN')->nullable();
            $table->double('BIAYA_PENUNJANG_USAHA')->nullable();
            $table->double('BIAYA_RT_LAIN')->nullable();
            $table->double('ANGS_BANK_UMUM')->nullable();
            $table->double('ANGS_BPR')->nullable();
            $table->double('ANGS_LEASING')->nullable();
            $table->double('ANGS_KOPERASI')->nullable();
            $table->double('ANGS_LAIN')->nullable();
            $table->double('PENDAPATAN_LAIN')->nullable();
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
        Schema::dropIfExists('t_keuangan');
    }
};
