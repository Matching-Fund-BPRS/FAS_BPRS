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
        Schema::create('t_angsuran', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('ID_NASABAH', 10)->nullable()->index('fk_t_angsuran_ID_NASABAH');
            $table->smallInteger('NO_ANGSURAN')->nullable();
            $table->double('POKOK_PINJAMAN')->nullable();
            $table->double('ANGS_POKOK')->nullable();
            $table->double('ANGS_BUNGA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_angsuran');
    }
};
