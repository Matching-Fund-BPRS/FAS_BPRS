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
        Schema::create('reff_sub_usaha', function (Blueprint $table) {
            $table->string('ID', 3)->nullable();
            $table->string('USAHA', 50)->nullable();
            $table->string('SEKTOR', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reff_sub_usaha');
    }
};
