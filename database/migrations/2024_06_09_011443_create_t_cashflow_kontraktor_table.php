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
        Schema::create('t_cashflow_kontraktor', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->double('TERMIN_1')->nullable();
            $table->double('TERMIN_2')->nullable();
            $table->double('TERMIN_3')->nullable();
            $table->double('DANA_SENDIRI')->nullable();
            $table->double('UANG_MUKA')->nullable();
            $table->double('PENCAIRAN')->nullable();
            $table->double('PINJAMAN')->nullable();
            $table->double('HUTANG_USAHA')->nullable();
            $table->double('PEMELIHARAAN')->nullable();
            $table->double('TOTAL_BIAYA_PROYEK')->nullable();
            $table->double('PAJAK')->nullable();
            $table->double('BIAYA_LAIN')->nullable();
            $table->double('BUNGA_PINJ_BANK')->nullable();
            $table->double('ANGS_POKOK_BANK')->nullable();
            $table->double('NILAI_PROYEK')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_cashflow_kontraktor');
    }
};
