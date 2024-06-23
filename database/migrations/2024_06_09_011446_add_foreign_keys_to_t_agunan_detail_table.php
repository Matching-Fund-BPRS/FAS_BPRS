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
        Schema::table('t_agunan_detail', function (Blueprint $table) {
            $table->foreign(['ID_NASABAH'], 'fk_t_agunan_detail_ID_NASABAH')->references(['ID_NASABAH'])->on('t_nasabah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_agunan_detail', function (Blueprint $table) {
            $table->dropForeign('fk_t_agunan_detail_ID_NASABAH');
        });
    }
};
