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
        Schema::create('t_kuantitatif', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->integer('KEPEMILIKAN')->nullable();
            $table->integer('NILAI_AGUNAN')->nullable();
            $table->integer('PENGIKATAN')->nullable();
            $table->integer('MARKETABILITY')->nullable();
            $table->integer('PENGUASAAN')->nullable();
            $table->integer('ASURANSI')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_kuantitatif');
    }
};
