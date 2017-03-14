<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsuranceBussiness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->increments('id_insurance_bussiness');
            //form personal information
            $table->string('title',10);
            $table->string('first_name',50);
            $table->string('middle_name',50);
            $table->string('sur_name',50);
            $table->string('birthdate',10);
            $table->string('employment_status',40);
            $table->string('occupation')->nullable();
            $table->string('business_type')->nullable();
            //your details
            $table->string('mobile_telephone',18);
            $table->string('email',50)->nullable();
            $table->string('house_number',50);
            $table->string('house_first_line');
            $table->string('postcode',20);
            $table->string('stablished_address')->nullable();
            //correspondence address
            $table->string('house_number_correspondence',50)->nullable();
            $table->string('house_address_correspondence')->nullable();
            $table->string('postcode_correspondence',20)->nullable();
            //company details
            $table->string('current_insurer',60)->nullable();
            $table->string('company_status',25)->nullable();
            $table->string('bussiness_name')->nullable();
            $table->string('business_description')->nullable();
            $table->string('specify_business')->nullable();
            $table->string('date_bussiness',10)->nullable();
            $table->string('total_employees',5)->nullable();
            $table->string('stimated_annual_turnover',20)->nullable();
            $table->string('stimated_annual_wages',20)->nullable();
            //Premises
            $table->string('premises_located')->nullable();
            $table->string('opening_hours_business')->nullable();
            $table->string('any_cctv',3)->nullable();
            $table->string('premises_building',3)->nullable();
            $table->string('roof_slope')->nullable();
            $table->string('floor_wood')->nullable();
            $table->string('walls_wood')->nullable();
            $table->string('live_upstair')->nullable();
            $table->string('doors_shutters')->nullable();
            $table->string('premises_occupied',15)->nullable();
            $table->string('roller_shutter',3)->nullable();
            $table->string('grilles_fitted',3)->nullable();
            $table->string('alarm_premises',3)->nullable();
            $table->string('type_alarm')->nullable();
            $table->string('alarm_notify')->nullable();
            $table->string('checked_organization',3)->nullable();
            $table->string('premises_comercial',3)->nullable();
            $table->string('if_running',3)->nullable(); // RELATIONS
            //COVER DETAILS
            $table->string('premises_owned_rented')->nullable();
            $table->string('require_building_cover',3)->nullable();
            $table->string('maximum_cash',20)->nullable();
            $table->string('cash_premises',3)->nullable();
            //stock to be insured
            $table->string('cigarettes_insured')->nullable();
            $table->string('wines_insured')->nullable();
            $table->string('frozen_insured')->nullable();
            $table->string('other_stock')->nullable();
            $table->string('contents_insured')->nullable();
            $table->string('contents_other_insured')->nullable();
            //claim summary
            $table->string('have_losses_accidents',3)->nullable();
            //employer references number details
            $table->string('paying_paye',3)->nullable();
            $table->string('employer_reference')->nullable();
            //policy start date
            $table->string('policy_start')->nullable();
            //fin
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
        Schema::dropIfExists('bussiness');
    }
}
