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
        Schema::create('cars_additional_drive', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('relationship')->nullable('');
            $table->string('date')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('employed_occupation')->nullable();
            $table->string('employed_business')->nullable();
            $table->string('type_license')->nullable();
            $table->string('period_license')->nullable();
            $table->string('license_number')->nullable();
            $table->string('dvla_medical')->nullable();
            $table->string('born_uk')->nullable();
            $table->string('uk_resident')->nullable();
            $table->string('other_vehicles')->nullable();
            $table->string('motoring_criminal_convictions')->nullable();
            $table->integer('motor_accidents')->unsigned()->nullable();
            $table->integer('motoring_offences')->unsigned()->nullable();
            $table->integer('additional_driver')->unsigned()->nullable();
            $table->string('additional_comments')->nullable();
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
