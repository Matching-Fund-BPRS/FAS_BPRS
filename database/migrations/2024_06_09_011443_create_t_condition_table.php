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
        Schema::create('t_condition', function (Blueprint $table) {
            $table->integer('PEM_KETERGANTUNGAN')->nullable();
            $table->integer('PEM_KEBUTUHAN')->nullable();
            $table->integer('CU_PASOKAN')->nullable();
            $table->integer('CU_KONSUMEN')->nullable();
            $table->integer('CU_KECAKAPAN')->nullable();
            $table->integer('CU_EKSTERNAL')->nullable();
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
        Schema::dropIfExists('t_condition');
    }
};
