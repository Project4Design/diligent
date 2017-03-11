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
            $table->string('conviction_code', 195)->nullable()->comment('Code of conviction');
            $table->string('date_conviction', 195)->nullable()->comment('date of conviction'); //DD-MM-YYYY
            $table->string('points', 195)->nullable()->comment('points');
            $table->string('fine_libras', 195)->nullable()->comment('fine libras if any');
            $table->string('ban_month', 195)->nullable()->comment('ban if any');
            
        });
        Schema::table('cars', function($table)
            {
                $table->foreign('motor_accidents')->references('id_accidents')->on('cars_motors_accidents');
               $table->foreign('motor_offences')->references('id_offences')->on('cars_motors_offences');

                
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
        $table->dropForeign('cars_id_motor_offences_foreign');
    });
    
        Schema::dropIfExists('cars_motors_offences');
    }
}
