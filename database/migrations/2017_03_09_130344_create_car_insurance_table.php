<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarInsuranceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');

            //Personal info
            $table->string('title');
            $table->string('firts_name');
            $table->string('middle_name')->nullable();
            $table->string('sure_name');
            $table->string('birthdate'); //DD-MM-YYYY
            $table->string('house_number');
            $table->string('firts_line_address');
            $table->string('postcode');
            $table->string('marital_status');
            $table->string('employment_status');
            $table->string('occupation')->nullable()->comment('If employed/Self employed');
            $table->string('business')->nullable()->comment('If employed/Self employed');
            $table->string('business_owner');
            $table->string('business_type')->nullable()->comment('If business_owner is YES');
            $table->string('home_owner');
            $table->string('children')->comment('Any Children Under 16');

            //Contact info
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile');
            $table->string('contact_via')->nullable();

            //Driving history
            $table->string('license_type');
            $table->string('date_obtained')->nullable()->comment('If license_type is Full UK, Full UK Automatic');
            $table->string('license_period_held');
            $table->string('license_enter'); //If want to enter the license number
            $table->string('license_number')->nullable(); //16 characters
            $table->string('dvla_medical_condition');
            $table->string('aditional_qualifications');
            $table->string('qualifications_obtained')->nullable()->comment('If any aditional_qualifications is selectd'); //DD-MM-YYYY
            $table->string('born_uk');
            $table->string('became_resident')->nullable()->comment('If no born_uk.'); //DD-MM-YYYY
            $table->string('use_other_vehicle');
            $table->string('monitoring_criminal_convictions');
            $table->string('motor_accidents')->comment('In the last 5 years.'); //RELATION WITH CAR_MOTOR_ACCIDENTS
            $table->string('motor_offences')->comment('In the last 5 years.'); //RELATION WITH CAR_MOTOR_OFFENSES

            //Vehicles Details
            $table->string('vehicle_registration');
            $table->string('unknow_registration'); //Checkbox
            $table->string('vehicle_manufacture')->nullable()->comment('If unknow_registration'); //Checkbox true
            $table->string('vehicle_model')->nullable()->comment('If unknow_registration'); //Checkbox true
            $table->string('vehicle_registration_year')->nullable()->comment('If unknow_registration'); //Checkbox true
            $table->string('vehicle_alarms')->nullable()->comment('If unknow_registration'); //Checkbox true
            $table->string('vehicle_number_seats')->nullable()->comment('If unknow_registration'); //Checkbox true
            $table->string('vehicle_number_doors')->nullable()->comment('If unknow_registration'); //Checkbox true
            $table->string('vehicle_engine_size')->nullable()->comment('If unknow_registration'); //Checkbox true
            $table->string('vehicle_transmission')->nullable()->comment('If unknow_registration'); //Checkbox true
            $table->string('vehicle_aprox_value')->nullable(); //Approximate value of the car right now?
            $table->string('vehicle_modifications');
            $table->text('vehicle_modifications_made')->nullable()->comment('If vehicle_modifications is YES');
            $table->string('vehicle_date_purchase'); //DD-MM-YYYY OR Not yet.
            $table->string('vehicle_registered_keeper');
            $table->string('vehicle_legal_owner');
            $table->string('vehicle_inpounded'); //Is the car impounded with the police?

            //Vehicle Usage
            $table->string('usage_kept_day'); //Kept during day
            $table->string('usage_kept_night'); //Kept during night
            $table->string('usage_kept_same_address');
            $table->string('usage_kept_other_address')->nullable()->comment('If usage_kept_same_address if NO');
            $table->string('drivers_insurance_imposed'); //Yes or No
            $table->string('usage');
            $table->string('usage_annual_milage')->nullable();
            $table->string('type_coverage')->nullable();
            $table->string('no_claims');
            $table->string('no_claims_earned_uk')->nullable();
            $table->string('no_claims_protect')->nullable();
            $table->string('voluntary_axcess');
            $table->string('pay_insurance');
            $table->string('policy_start'); //DD-MM-YYYY

            //Aditional Drive
            $table->string('additional_drive'); //RELATION WITH CARS_ADDITIONAL_DRIVERS

            //FINAL PART
            $table->string('heard_from_us');
            $table->string('referrer');
            $table->string('additional_comments');

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
        Schema::dropIfExists('cars');
    }
}
