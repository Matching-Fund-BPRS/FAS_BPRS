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
        Schema::create('reff_sandi_sid', function (Blueprint $table) {
            $table->string('JENIS', 2)->nullable();
            $table->string('SANDI', 4)->nullable();
            $table->string('KETERANGAN', 100)->nullable();
            $table->boolean('DELETED')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reff_sandi_sid');
    }
};
