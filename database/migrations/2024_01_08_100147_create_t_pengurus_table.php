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
        Schema::create('t_pengurus', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->nullable()->index('fk_t_pengurus_ID_NASABAH');
            $table->string('NAMA', 50)->nullable();
            $table->string('JABATAN', 30)->nullable();
            $table->string('NO_TELP', 30)->nullable();
            $table->date('TGL_LAHIR')->nullable();
            $table->string('NO_KTP', 30)->nullable();
            $table->double('SAHAM')->nullable();
            $table->integer('ID', true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pengurus');
    }
};
