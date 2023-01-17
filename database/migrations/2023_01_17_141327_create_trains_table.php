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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 20)->default('Trenitalia');
            $table->date('day');
            $table->string('starting_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure_time', 0);
            $table->time('arrival_time', 0);
            $table->string('train_code', 10);
            $table->smallInteger('coaches')->unsigned();
            $table->boolean('on_time');
            $table->boolean('canceled');
            
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
        Schema::dropIfExists('trains');
    }
};
