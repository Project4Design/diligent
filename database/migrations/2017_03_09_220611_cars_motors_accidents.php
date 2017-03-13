<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarsMotorsAccidents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_motors_accidents', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id_accidents');
            $table->integer('id_cars')->unsigned();
            $table->foreign('id_cars')->references('id')->on('cars')->onDelete('cascade');
            $table->integer('id_additional_driver')->unsigned()->nullable();
            $table->foreign('id_additional_driver')->references('id_additional_driver')->on('cars_additional_driver')->onDelete('cascade');
            $table->string('type',195)->nullable()->comment('Type of accident');
            $table->string('date',195)->nullable()->comment('Date of accident'); //DD-MM-YYYY
            $table->string('damage',195)->nullable()->comment('Damage of accident');
            $table->string('cost',195)->nullable()->comment('cost of accident'); //Cost (Libras) -if know
            $table->string('fault',195)->nullable()->comment('Fault of the accident');
            $table->string('any_injuries',195)->nullable()->comment('any injuries of accidents'); //Yes or not
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
    
        Schema::dropIfExists('cars_motors_accidents');
    }


}
