<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarsMotorsOffense extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_motors_offences', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_offences');
            $table->integer('id_cars_offences')->unsigned();
            $table->foreign('id_cars_offences')->references('id')->on('cars')->onDelete('cascade');
            $table->integer('id_additional_drive_offences')->unsigned()->nullable();
            $table->foreign('id_additional_drive_offences')->references('id_additional_drive')->on('cars_additional_drive')->onDelete('cascade');
            $table->string('conviction_code', 195)->nullable()->comment('Code of conviction');
            $table->string('date_conviction', 195)->nullable()->comment('date of conviction'); //DD-MM-YYYY
            $table->string('points', 195)->nullable()->comment('points');
            $table->string('fine_libras', 195)->nullable()->comment('fine libras if any');
            $table->string('ban_month', 195)->nullable()->comment('ban if any');
            
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
  {

    
        Schema::dropIfExists('cars_motors_offences');
    }
}
