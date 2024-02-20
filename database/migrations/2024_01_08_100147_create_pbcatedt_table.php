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
        Schema::create('pbcatedt', function (Blueprint $table) {
            $table->string('pbe_name', 30)->nullable();
            $table->string('pbe_edit', 254)->nullable();
            $table->smallInteger('pbe_type')->nullable();
            $table->integer('pbe_cntr')->nullable();
            $table->smallInteger('pbe_seqn')->nullable();
            $table->integer('pbe_flag')->nullable();
            $table->string('pbe_work', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbcatedt');
    }
};
