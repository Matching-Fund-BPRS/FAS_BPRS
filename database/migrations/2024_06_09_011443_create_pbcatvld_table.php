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
        Schema::create('pbcatvld', function (Blueprint $table) {
            $table->string('pbv_name', 30)->nullable();
            $table->string('pbv_vald', 254)->nullable();
            $table->smallInteger('pbv_type')->nullable();
            $table->integer('pbv_cntr')->nullable();
            $table->string('pbv_msg', 254)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbcatvld');
    }
};
