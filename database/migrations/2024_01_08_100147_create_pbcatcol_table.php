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
        Schema::create('pbcatcol', function (Blueprint $table) {
            $table->string('pbc_tnam', 65)->nullable();
            $table->integer('pbc_tid')->nullable();
            $table->string('pbc_ownr', 65)->nullable();
            $table->string('pbc_cnam', 65)->nullable();
            $table->smallInteger('pbc_cid')->nullable();
            $table->string('pbc_labl', 254)->nullable();
            $table->smallInteger('pbc_lpos')->nullable();
            $table->string('pbc_hdr', 254)->nullable();
            $table->smallInteger('pbc_hpos')->nullable();
            $table->smallInteger('pbc_jtfy')->nullable();
            $table->string('pbc_mask', 31)->nullable();
            $table->smallInteger('pbc_case')->nullable();
            $table->smallInteger('pbc_hght')->nullable();
            $table->smallInteger('pbc_wdth')->nullable();
            $table->string('pbc_ptrn', 31)->nullable();
            $table->string('pbc_bmap', 1)->nullable();
            $table->string('pbc_init', 254)->nullable();
            $table->string('pbc_cmnt', 254)->nullable();
            $table->string('pbc_edit', 31)->nullable();
            $table->string('pbc_tag', 254)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbcatcol');
    }
};
