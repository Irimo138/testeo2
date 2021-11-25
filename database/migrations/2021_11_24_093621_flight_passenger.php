<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FlightPassenger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_passenger', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flight_id');
            $table->foreign('flight_id')->references('id')->on('flights');
            $table->unsignedBigInteger('passengers_id');
            $table->foreign('passengers_id')->references('id')->on('passengers');
            $table->timestamp('last_used_at')->nullable();
            $table->integer('ticket');
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
        Schema::dropIfExists('flight_passenger');
    }
}
