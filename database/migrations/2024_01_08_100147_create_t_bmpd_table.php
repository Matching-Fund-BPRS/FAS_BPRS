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
        Schema::create('t_bmpd', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->double('MODAL_INTI_CAB')->nullable();
            $table->double('MODAL_INTI_PUSAT')->nullable();
            $table->double('MODAL_PELENGKAP_CAB')->nullable();
            $table->double('MODAL_PELENGKAP_PUSAT')->nullable();
            $table->double('BMPD_PERORG_CAB')->nullable();
            $table->double('BMPD_PERORG_PUSAT')->nullable();
            $table->double('BMPD_KEL_CAB')->nullable();
            $table->double('BMPD_KEL_PUSAT')->nullable();
            $table->double('BMPD_TERKAIT_CAB')->nullable();
            $table->double('BMPD_TERKAIT_PUSAT')->nullable();
            $table->double('PLAFOND_CAB')->nullable();
            $table->double('PLAFOND_PUSAT')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bmpd');
    }
};
