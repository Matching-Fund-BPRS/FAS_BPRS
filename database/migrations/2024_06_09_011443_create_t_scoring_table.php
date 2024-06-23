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
        Schema::create('t_scoring', function (Blueprint $table) {
            $table->decimal('CHARACTER', 9)->nullable();
            $table->decimal('CAPACITY', 9)->nullable();
            $table->decimal('COLLATERAL', 9)->nullable();
            $table->decimal('CONDITION', 9)->nullable();
            $table->decimal('CAPITAL', 9)->nullable();
            $table->decimal('SYARIAH', 9)->nullable();
            $table->decimal('SCORING', 9)->nullable();
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
        Schema::dropIfExists('t_scoring');
    }
};
