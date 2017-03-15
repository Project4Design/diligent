<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = "home_insurance";

    public $primaryKey = "id_home_insurance";

    public $fillable = [
    'title',
    'first_name',
    'middle_name',
    'sur_name',
    'birthdate',
    'marital_status',
    'employment_status',
    'occupation',
    'business_type',
    'born_uk',
    'became_resident',
    'email',
    'contact_number',
    'property_number',
    'property_first_line',
    'property_postcode',
    'type_property',
    'stimate_built',
    'number_living_rooms',
    'number_kitchens',
    'number_bathrooms',
    'number_bedrooms',
    'taller_within_property',
    'approximate_roof',
    'own_property',
    'lives_property',
    'many_years_property',
    'many_adults_property',
    'many_children_property',
    'property_usually_occupied',
    'many_days_row_property',
    'anybody_smoke',
    'property_business',
    'property_alarm',
    'lock_main_door',
    'lock_external_doors',
    'key_operated_locks',
    'smoke_alarms_property',
    'rebuild_property',
    'accidental_damage_buildings',
    'ncb_buildings_insurance',
    'content_value_property',
    'specific_items',
    'like_away_home',
    'accidentals_damage_contents',
    'ncb_content_insurance'
    'property_losses_damage'
    'like_cover_start',
    'built_blick_walls',
    'meter_from_water',
    'roof_made_slate',
    'listed_property',
    'not_for_sale',
    'shown_subsidence',
    'main_residence',
    'underpinning_structural_support',
    'undergoing_building',
    'suffered_from_flooding',
    'significant_external_walls',
    'agree_assumptions'
    ];
}
