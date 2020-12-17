<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Triptocarbon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('urls',function(Blueprint $table){

        $table->taxiurl('https://api.triptocarbon.xyz/v1/footprint?activity=10&activityType=miles&country=usa&mode=taxi');
        $table->dieselurl('https://api.triptocarbon.xyz/v1/footprint?activity=10&activityType=miles&country=def&mode=dieselCar');
        $table->petrolurl('https://api.triptocarbon.xyz/v1/footprint?activity=10&activityType=miles&country=def&mode=petrolCar');
        $table->economyurl('https://api.triptocarbon.xyz/v1/footprint?activity=10&activityType=miles&country=def&mode=economyFlight');
        $table->businessurl('https://api.triptocarbon.xyz/v1/footprint?activity=10&activityType=miles&country=def&mode=businessFlight');
        $table->motorurl('https://api.triptocarbon.xyz/v1/footprint?activity=10&activityType=miles&country=def&mode=motorbike');
        $table->busurl('https://api.triptocarbon.xyz/v1/footprint?activity=10&activityType=miles&country=usa&mode=bus');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
