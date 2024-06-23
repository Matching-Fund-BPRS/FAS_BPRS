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
        Schema::create('t_capacity', function (Blueprint $table) {
            $table->integer('TEH_UTILISASI')->nullable();
            $table->integer('TEH_LAMA_USAHA')->nullable();
            $table->integer('CB_MANAJEMEN_SDM')->nullable();
            $table->integer('CB_PENGELOLAAN')->nullable();
            $table->decimal('CB_DSCR', 20)->nullable();
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
        Schema::dropIfExists('t_capacity');
    }
};
