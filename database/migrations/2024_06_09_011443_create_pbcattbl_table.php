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
        Schema::create('pbcattbl', function (Blueprint $table) {
            $table->string('pbt_tnam', 65)->nullable();
            $table->integer('pbt_tid')->nullable();
            $table->string('pbt_ownr', 65)->nullable();
            $table->smallInteger('pbd_fhgt')->nullable();
            $table->smallInteger('pbd_fwgt')->nullable();
            $table->string('pbd_fitl', 1)->nullable();
            $table->string('pbd_funl', 1)->nullable();
            $table->smallInteger('pbd_fchr')->nullable();
            $table->smallInteger('pbd_fptc')->nullable();
            $table->string('pbd_ffce', 18)->nullable();
            $table->smallInteger('pbh_fhgt')->nullable();
            $table->smallInteger('pbh_fwgt')->nullable();
            $table->string('pbh_fitl', 1)->nullable();
            $table->string('pbh_funl', 1)->nullable();
            $table->smallInteger('pbh_fchr')->nullable();
            $table->smallInteger('pbh_fptc')->nullable();
            $table->string('pbh_ffce', 18)->nullable();
            $table->smallInteger('pbl_fhgt')->nullable();
            $table->smallInteger('pbl_fwgt')->nullable();
            $table->string('pbl_fitl', 1)->nullable();
            $table->string('pbl_funl', 1)->nullable();
            $table->smallInteger('pbl_fchr')->nullable();
            $table->smallInteger('pbl_fptc')->nullable();
            $table->string('pbl_ffce', 18)->nullable();
            $table->string('pbt_cmnt', 254)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbcattbl');
    }
};
