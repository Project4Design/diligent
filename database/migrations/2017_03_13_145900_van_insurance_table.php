<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VanInsuranceTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('vans', function (Blueprint $table) {

      $table->engine = 'InnoDB';
      $table->increments('id_vans');

      //Personal info
      $table->string('title',5);
      $table->string('first_name',45);
      $table->string('middle_name',45);
      $table->string('sur_name',45);
      $table->string('birthdate',10); //DD-MM-YYYY
      $table->string('marital_status',10);
      $table->string('address_line1',100);
      $table->string('address_line2',100)->nullable();
      $table->string('address_city',50);
      $table->string('address_postcode',50);
      $table->string('born_uk',3);
      $table->string('became_resident',10)->nullable()->comment('If no born_uk.'); //DD-MM-YYYY
      $table->string('employment_status',40);
      $table->string('occupation')->nullable()->comment('If employed/Self employed');
      $table->string('business_type')->nullable()->comment('If business_owner is YES');
      $table->string('license_type',40);
      $table->string('license_period_held',10);
      $table->string('date_provitional_license',10)->nullable()->comment('If license_type is Full UK, Full UK Automatic');;
      $table->string('license_enter',3);
      $table->string('license_number',16)->nullable(); //16 characters
      $table->string('dvla_medical_condition',40);
      $table->string('additional_qualifications',40);
      $table->string('date_qualifications_obtained',10)->nullable()->comment('If any additional_qualifications is selectd'); //DD-MM-YYYY
      $table->string('use_other_vehicle',40);

      //Van Details
      $table->string('vehicle_registration',50);
      $table->string('vehicle_registration_year',10)->nullable();
      $table->string('vehicle_aprox_value',30)->nullable(); //How much is the car worth?
      $table->string('vehicle_manufacturer',50);
      $table->string('vehicle_model',50);
      $table->string('vehicle_number_seats',2);
      $table->string('vehicle_number_doors',2);
      $table->string('vehicle_alarms',50)->nullable();
      $table->string('vehicle_engine_size',20)->nullable();
      $table->string('vehicle_transmission',10)->nullable();
      $table->string('vehicle_fuel',10)->nullable();  //NEWWWW--------------------------------------------------
      $table->string('vehicle_body_type',30);  //NEWWWW---------------------------------------------------------
      $table->string('vehicle_roof_type',12);  //NEWWWW---------------------------------------------------------
      $table->string('vehicle_wheel_base',20);  //NEWWWW--------------------------------------------------------
      $table->string('vehicle_imported',3);
      $table->string('vehicle_modifications',3);
      $table->string('vehicle_dash_cam',3);

      //Car ownership
      $table->string('vehicle_date_purchase',10); //DD-MM-YYYY OR Not yet.
      $table->string('vehicle_registered_keeper',20);
      $table->string('vehicle_legal_owner',20);
      $table->string('vehicle_inpounded',3); //Is the car impounded with the police?

      //Vehicle Usage
      $table->string('usage_kept_day',30); //Kept during day
      $table->string('usage_kept_night',30); //Kept during night
      $table->string('usage_kept_same_address',3);
      $table->string('usage_kept_other_address',100)->nullable()->comment('If usage_kept_same_address if NO');
      $table->string('dangerous_goods',3); //NEWWWW-----------------------------------------------------------
      $table->string('drivers_insurance_imposed',3); //Yes or No
      $table->string('usage',50);
      $table->string('usage_annual_milage',50);
      $table->string('type_business',15); //NEWWWW-----------------------------------------------------------
      $table->string('type_coverage',28);
      $table->string('no_claims',15);
      $table->string('no_claims_earned_uk',3)->nullable();
      $table->string('no_claims_protect',3)->nullable();
      $table->string('any_other_ncd',10); //NEWWWW-----------------------------------------------------------
      $table->string('voluntary_excess');
      $table->string('pay_insurance',10);
      $table->string('policy_start',10); //DD-MM-YYYY

      //Your Household
      $table->string('children',3)->comment('Any Children Under 16');
      $table->string('vehicles_how_many',3)->comment('How many cars are at home');
      $table->string('home_owner',3);
      $table->string('business_owner',3);
      $table->string('business',100)->nullable()->comment('If own a business');

      //Claims & Convictions
      $table->string('non_motoring_convictions',3);
      $table->string('motor_accidents',3); //RELATION WITH CAR_MOTOR_ACCIDENTS
      $table->string('motor_offences',3); //RELATION WITH CAR_MOTOR_OFFENSES

      //Contact info
      $table->string('email')->nullable();
      $table->string('phone')->nullable();
      $table->string('mobile');
      $table->string('contact_via')->nullable();

      //Hear about us
      $table->string('heard_from_us',20)->nullable();
      $table->string('referrer')->nullable();
      $table->string('comments')->nullable();

      //Additional Drive
      $table->string('additional_driver1')->nullable(); //RELATION WITH CARS_ADDITIONAL_DRIVERS
      $table->string('additional_driver2')->nullable(); //RELATION WITH CARS_ADDITIONAL_DRIVERS

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
    Schema::dropIfExists('vans');
  }
}
