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
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('device_name');
            $table->enum('type',['Mouse','Keyboard','Headset']);
            $table->boolean('status')->default(false);
            $table->integer('center_id');
            $table->foreign('center_id')->references('id')->on('it_centers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hardware_devices');
    }
};
