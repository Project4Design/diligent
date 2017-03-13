<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Accidents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accidents', function (Blueprint $table) {
            //Personal information
            $table->increments('id_accidents_management');
            $table->string('title')->comment('starting form personal info all required');
            $table->string('first_name',50);
            $table->string('middle_name',50);
            $table->string('sur_name',50);
            $table->string('vehicle_registration',50);
            $table->string('birthdate',10)->comment('DD-MM-YYYY');
            $table->string('house_number_name');
            $table->string('first_line_address');
            $table->string('postcode');
            $table->string('phone');
            $table->string('insurer')->nullable();

            //Other Driver Details
            $table->string('other_name');
            $table->string('other_driver_vehicle');
            $table->string('other_driver_address')->nullable()->comment('if known');
            $table->string('other_driver_contact_number')->nullable()->comment('if known');
            $table->string('other_driver_contact_insurer')->nullable()->comment('if known');

            //Accident Details
            $table->string('valid_insurance',3)->comment('starting form accident details'); //Was a valid insurance policy in force at the time of accident
            $table->string('date_incident',10)->comment('DD-MM-YYYY');
            $table->string('time_incident',10)->comment('time reloj');
            $table->string('location_incident',100)->comment('textarea');
            $table->string('weather_condition',10)->nullable();
            $table->string('brief_description_happened')->comment('textarea');

            //Additional Details
            $table->string('witnesses_details',3)->comment('starting form additional details'); // RELATIONS 
            $table->string('passengers_injury',3);// RELATIONS


            $table->string('how_about_us')->nullable();
            $table->string('friend_family_referral')->nullable();
            $table->string('additional_comments_details')->nullable()->comment('textarea');
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
        Schema::dropIfExists('accidents');
    }
}
