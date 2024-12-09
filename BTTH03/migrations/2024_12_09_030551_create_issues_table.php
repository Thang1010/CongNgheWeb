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
        Schema::create('issues', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('computer_id');
            $table->string('reported_by',50);
            $table->dateTime('reported_date');
            $table->text('description');
            $table->enum('urgency',['Low','Medium','High']);
            $table->enum('status',['open','in progress','resolved']);
            $table->foreign('computer_id')->references('id')->on('computers');
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
        Schema::dropIfExists('issues');
    }
};
