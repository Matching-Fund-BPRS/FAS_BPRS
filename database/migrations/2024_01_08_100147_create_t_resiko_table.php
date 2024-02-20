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
        Schema::create('t_resiko', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->mediumText('RESIKO')->nullable();
            $table->mediumText('MITIGASI_RESIKO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_resiko');
    }
};
