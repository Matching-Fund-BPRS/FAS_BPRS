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
        Schema::create('t_daftar_proyek', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('ID_NASABAH', 10)->nullable()->index('fk_t_daftar_proyek_ID_NASABAH');
            $table->string('PROYEK', 100)->nullable();
            $table->string('JENIS_PROYEK', 30)->nullable();
            $table->string('LOKASI')->nullable();
            $table->date('TGL_MULAI')->nullable();
            $table->date('TGL_AKHIR')->nullable();
            $table->double('NILAI')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_daftar_proyek');
    }
};
