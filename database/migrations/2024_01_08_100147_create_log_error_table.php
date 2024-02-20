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
        Schema::create('log_error', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->dateTime('TANGGAL')->nullable();
            $table->string('USER_ID', 20)->nullable();
            $table->mediumText('KETERANGAN')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_error');
    }
};
