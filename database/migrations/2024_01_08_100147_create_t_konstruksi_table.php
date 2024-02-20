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
        Schema::create('t_konstruksi', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->nullable()->index('fk_t_konstruksi_ID_NASABAH');
            $table->double('NILAI_KONTRAK')->nullable();
            $table->double('PPN')->nullable();
            $table->double('PPH')->nullable();
            $table->double('NILAI_PROYEK_NET')->nullable();
            $table->double('MAX_PLAFOND')->nullable();
            $table->double('ESTIMASI_HPP')->nullable();
            $table->double('ANGSURAN_BANK')->nullable();
            $table->double('ESTIMASI_BUNGA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_konstruksi');
    }
};
