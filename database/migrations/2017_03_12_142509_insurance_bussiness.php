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
        Schema::create('bussiness', function (Blueprint $table) {
            $table->increments('id_insurance_bussiness');
            //form personal information
            $table->string('title');
            $table->string('first_name');
            $table->string('surname');
            $table->string('born_date');
            $table->string('employment_status');
            $table->string('employed_occupation')->nullable();
            $table->string('employed_business')->nullable();
            //your details
            $table->string('mobile_telephone');
            $table->string('email')->nullable();
            $table->string('house_number');
            $table->string('house_line_address');
            $table->string('postcode');
            $table->string('stablished_address')->nullable();
            //correspondence address
            $table->string('house_number_correspondence')->nullable();
            $table->string('house_address_correspondence')->nullable();
            $table->string('postcode_correspondence')->nullable();
            //company details
            $table->string('current_insurer')->nullable();
            $table->string('company_status')->nullable();
            $table->string('bussiness_name')->nullable();
            $table->string('specify_business')->nullable();
            $table->string('date_bussiness')->nullable();
            $table->string('total_employees')->nullable();
            $table->string('stimated_annual_turnover')->nullable();
            $table->string('stimated_annual_wages')->nullable();
            //Premises
            $table->string('premises_located')->nullable();
            $table->string('opening_hours_business')->nullable();
            $table->string('any_cctv')->nullable();
            $table->string('premises_building')->nullable();
            $table->string('roof_slope')->nullable();
            $table->string('floor_wood')->nullable();
            $table->string('walls_wood')->nullable();
            $table->string('live_upstair')->nullable();
            $table->string('doors_shutterr')->nullable();
            $table->string('premises_occupied')->nullable();
            $table->string('floor_exposed_glazing')->nullable();
            $table->string('alarm_premises')->nullable();
            $table->string('type_alarm')->nullable();
            $table->string('alarm_notify')->nullable();
            $table->string('checked_organization')->nullable();
            $table->string('premises_comercial')->nullable();
            $table->string('if_running')->nullable(); // RELATIONS
            //COVER DETAILS
            $table->string('premises_owned_rented')->nullable();
            $table->string('require_building_cover')->nullable();
            $table->string('maximum_cash')->nullable();
            $table->string('cash_premises')->nullable();
            //stock to be insured
            $table->string('cigarettes_insured')->nullable();
            $table->string('wines_insured')->nullable();
            $table->string('frozen_insured')->nullable();
            $table->string('other_stock')->nullable();
            $table->string('contents_insured')->nullable();
            $table->string('contents_other_insured')->nullable();
            //claim summary
            $table->string('have_losses_accidents')->nullable();
            //employer references number details
            $table->string('paying_paye')->nullable();
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
