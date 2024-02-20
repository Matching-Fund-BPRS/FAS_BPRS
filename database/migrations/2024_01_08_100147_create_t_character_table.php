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
        Schema::create('t_character', function (Blueprint $table) {
            $table->integer('MAN_KEMAUAN')->nullable();
            $table->integer('MAN_KEJUJURAN')->nullable();
            $table->integer('MAN_REPUTASI')->nullable();
            $table->integer('CW_TANGGUNG')->nullable();
            $table->integer('CW_TERBUKA')->nullable();
            $table->integer('CW_DISIPLIN')->nullable();
            $table->integer('CW_JANJI')->nullable();
            $table->integer('PU_INTEGRITAS')->nullable();
            $table->integer('PU_ACCOUNT_BEHAVIOR')->nullable();
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
        Schema::dropIfExists('t_character');
    }
};
