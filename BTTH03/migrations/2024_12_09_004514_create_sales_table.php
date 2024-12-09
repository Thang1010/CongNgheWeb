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
        Schema::create('sales', function (Blueprint $table) {
            $table->Integer('sale_id')->primary();
            $table->Integer('medicine_id');
            $table->Integer('quantity');
            $table->dateTime('sale_date');
            $table->string('custimer_phone',10);
            $table->foreign('medicine_id')->references('medicine_id')->on('medicines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
