<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccidentPassengersInjury extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accident_passengers_injury', function (Blueprint $table) {
            $table->increments('id_passengers_injury');
            $table->integer('id_accidents_injury')->unsigned();
            $table->foreign('id_accidents_injury')->references('id_accidents_management')->on('accidents')->onDelete('cascade');
            $table->string('witness_name')->nullable();
            $table->string('witness_address')->nullable();
            $table->string('witness_contact_number')->nullable();
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
        Schema::dropIfExists('accident_passengers_injury');
    }
}
