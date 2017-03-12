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
            $table->increments('id_accidents_management');
            $table->string('how_about_us')->nullable();
            $table->string('friend_family_referral')->nullable();
            $table->string('title')->comment('starting form personal info all required');
            $table->string('first_name');
            $table->string('your_surname');
            $table->string('your_vehicle_registration');
            $table->string('date_of_birth')->comment('DD-MM-YYYY');
            $table->string('house_number_name');
            $table->string('first_line_address');
            $table->string('postcode');
            $table->string('phone');
            $table->string('your_insurer')->nullable()->comment('field is optional');
            $table->string('other_driver_name')->comment('starting form other drive details');
            $table->string('other_driver_vehicle');
            $table->string('other_driver_address')->nullable()->comment('if known');
            $table->string('other_driver_contact_number')->nullable()->comment('if known');
            $table->string('other_driver_contact_insurer')->nullable()->comment('if known');
            $table->string('valid_time_accident')->comment('starting form accident details');
            $table->string('date_incident')->comment('DD-MM-YYYY');
            $table->string('time_incident')->comment('time reloj');
            $table->string('location_incident')->comment('textarea');
            $table->string('weather_condition')->nullable();
            $table->string('brief_description_happened')->nullable()->comment('textarea');
            $table->string('witnesses_details')->nullable()->comment('starting form additional details'); // RELATIONS 
            $table->string('passengers_injury')->nullable(); // RELATIONS
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
