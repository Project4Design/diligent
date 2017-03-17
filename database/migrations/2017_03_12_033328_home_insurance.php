<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HomeInsurance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_insurance', function (Blueprint $table) {
            $table->increments('id_home_insurance');
            $table->string('title',5);
            $table->string('first_name',45);
            $table->string('middle_name',45)->nullable();
            $table->string('sur_name',45);
            $table->string('birthdate',10);
            $table->string('marital_status',10);
            $table->string('employment_status',40);
            $table->string('occupation')->nullable();
            $table->string('business_type')->nullable();
            $table->string('born_uk',3);
            $table->string('became_resident',10)->nullable();
            $table->string('email',50)->nullable();;
            $table->string('contact_number',20);
            $table->string('property_number',10);
            $table->string('property_first_line',50);
            $table->string('property_postcode',10);
            $table->string('type_property',15)->nullable();
            $table->string('stimate_built',5)->nullable();
            $table->string('number_living_rooms',5)->nullable();
            $table->string('number_kitchens',5)->nullable();
            $table->string('number_bathrooms',5)->nullable();
            $table->string('number_bedrooms',5)->nullable();
            $table->string('taller_within_property',3)->nullable();
            $table->string('approximate_roof',15)->nullable();
            $table->string('own_property',20)->nullable();
            $table->string('lives_property',25)->nullable();
            $table->string('many_years_property',5)->nullable();
            $table->string('many_adults_property',2)->nullable();
            $table->string('many_children_property',2)->nullable();
            $table->string('property_usually_occupied',15)->nullable();
            $table->string('many_days_row_property',20)->nullable();
            $table->string('anybody_smoke',3)->nullable();
            $table->string('property_business',3)->nullable();
            $table->string('property_alarm',45)->nullable();
            $table->string('lock_main_door',30)->nullable();
            $table->string('lock_external_doors',30)->nullable();
            $table->string('key_operated_locks',3)->nullable();
            $table->string('smoke_alarms_property',3)->nullable();
            $table->string('rebuild_property',20)->nullable();
            $table->string('accidental_damage_buildings',3)->nullable();
            $table->string('ncb_buildings_insurance',30)->nullable();
            $table->string('content_value_property')->nullable()->comment('textarea');
            $table->string('specific_items',3)->nullable();
            $table->string('like_away_home',3)->nullable();
            $table->string('accidentals_damage_contents',3)->nullable();
            $table->string('ncb_content_insurance',30);
            $table->string('property_losses_damage',3); //RELATIONS
            $table->string('like_cover_start',10);

            //The property
            $table->string('built_blick_walls')->nullable()->comment('starting form THE PROPERTY');
            $table->string('meter_from_water')->nullable();
            $table->string('roof_made_slate')->nullable();
            $table->string('listed_property')->nullable();
            $table->string('not_for_sale')->nullable();
            $table->string('shown_subsidence')->nullable();
            $table->string('main_residence')->nullable();
            $table->string('underpinning_structural_support')->nullable();
            $table->string('undergoing_building')->nullable();
            $table->string('suffered_from_flooding')->nullable();
            $table->string('significant_external_walls')->nullable();
            $table->string('agree_assumptions')->nullable();
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
        Schema::dropIfExists('home_insurance');
    }
}
