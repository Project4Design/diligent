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
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('date')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('employed_occupation')->nullable();
            $table->string('employed_bussiness')->nullable();
            $table->string('born_uk')->nullable();
            $table->string('last_resident_uk')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('property_address')->nullable();
            $table->string('type_property')->nullable();
            $table->string('stimate_built')->nullable();
            $table->string('number_living_rooms')->nullable();
            $table->string('number_kitchens')->nullable();
            $table->string('number_bathrooms')->nullable();
            $table->string('number_bedrooms')->nullable();
            $table->string('taller_within_property')->nullable();
            $table->string('approximate_roof')->nullable();
            $table->string('own_property')->nullable();
            $table->string('lives_property')->nullable();
            $table->string('many_years_property')->nullable();
            $table->string('many_adults_property')->nullable();
            $table->string('many_children_property')->nullable();
            $table->string('property_usually_occupied')->nullable();
            $table->string('many_days_row_property')->nullable();
            $table->string('anybody_property')->nullable();
            $table->string('property_business')->nullable();
            $table->string('property_alarm')->nullable();
            $table->string('lock_main_door')->nullable();
            $table->string('lock_external_doors')->nullable();
            $table->string('key_operated_locks')->nullable();
            $table->string('smoke_alarms_property')->nullable();
            $table->string('rebuild_property')->nullable();
            $table->string('accidental_damage_buildings')->nullable();
            $table->string('ncb_buildings_insurance')->nullable();
            $table->string('context_value_property')->nullable()->comment('textarea');
            $table->string('specific_intems')->nullable();
            $table->string('like_away_home')->nullable();
            $table->string('accidentals_damage_contents')->nullable();
            $table->string('ncb_content_insurance')->nullable();
            $table->string('property_losses_damage')->nullable(); //RELATIONS
            $table->string('like_cover_start')->nullable();
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
