<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarsAdditionalDrive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_additional_driver', function (Blueprint $table) {
            $table->increments('id_additional_driver');
            $table->integer('id_cars_additional')->unsigned();
            $table->foreign('id_cars_additional')->references('id')->on('cars')->onDelete('cascade');
            $table->string('ca_title',5)->nullable();
            $table->string('ca_first_name',50)->nullable();
            $table->string('ca_middle_name',50)->nullable();
            $table->string('ca_sur_name',50)->nullable();
            $table->string('ca_relationship',30)->nullable();
            $table->string('ca_birthdate',10)->nullable();
            $table->string('ca_marital_status',10)->nullable();
            $table->string('ca_employment_status',40)->nullable();
            $table->string('ca_employed_occupation')->nullable();
            $table->string('ca_employed_business')->nullable();
            $table->string('ca_type_license',40)->nullable();
            $table->string('ca_period_license',10)->nullable();
            $table->string('ca_date_provitional_license',10)->nullable()->comment('If license_type is Full UK, Full UK Automatic');;
            $table->string('ca_license_enter',3)->nullable();
            $table->string('ca_license_number',16)->nullable();
            $table->string('ca_dvla_medical',40)->nullable();
            $table->string('ca_born_uk',3)->nullable();
            $table->string('ca_uk_resident',10)->nullable();
            $table->string('ca_other_vehicles',40)->nullable();
            $table->string('ca_non_motoring_convictions',3)->nullable();
            $table->string('ca_motor_accidents',3)->unsigned()->nullable();
            $table->string('ca_motor_offences',3)->unsigned()->nullable();
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
        Schema::dropIfExists('cars_additional_drive');
    }
}
