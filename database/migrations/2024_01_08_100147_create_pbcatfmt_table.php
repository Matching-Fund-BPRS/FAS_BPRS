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
        Schema::create('pbcatfmt', function (Blueprint $table) {
            $table->string('pbf_name', 30)->nullable();
            $table->string('pbf_frmt', 254)->nullable();
            $table->smallInteger('pbf_type')->nullable();
            $table->integer('pbf_cntr')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbcatfmt');
    }
};
