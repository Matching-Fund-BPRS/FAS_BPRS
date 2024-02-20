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
        Schema::create('t_capital', function (Blueprint $table) {
            $table->string('ID_NASABAH', 10)->primary();
            $table->decimal('CM_DAR', 20)->nullable();
            $table->decimal('CM_DER', 20)->nullable();
            $table->decimal('CM_LDER', 20)->nullable();
            $table->decimal('PK_ASET', 20, 1)->nullable();
            $table->decimal('PK_INCOME_SALES', 3, 1)->nullable();
            $table->decimal('RPC', 20)->nullable();
            $table->decimal('PK_EBIT', 20, 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_capital');
    }
};
