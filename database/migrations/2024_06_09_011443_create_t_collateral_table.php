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
        Schema::create('t_collateral', function (Blueprint $table) {
            $table->integer('LEG_USAHA')->nullable();
            $table->integer('PENGIKATAN')->nullable();
            $table->integer('MARKETABILITY')->nullable();
            $table->integer('KEPEMILIKAN')->nullable();
            $table->integer('PENGUASAAN')->nullable();
            $table->integer('CA_NILAI_AGUNAN')->nullable();
            $table->integer('PA_DOKUMEN')->nullable();
            $table->string('ID_NASABAH', 10)->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_collateral');
    }
};
