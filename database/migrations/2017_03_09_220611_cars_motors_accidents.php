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
            
            $table->increments('id');
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
        Schema::table('cars', function (Blueprint $table) {
        $table->dropForeign('cars_id_motor_accidents_foreign');
    });
        Schema::dropIfExists('cars_motors_accidents');
    }


}
