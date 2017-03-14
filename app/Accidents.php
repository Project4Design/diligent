<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accidents extends Model
{
    protected $table = "accidents";

    protected $primaryKey = "id_accidents_management";

    public $fillable = [
    'title',
    'first_name',
    'middle_name',
    'sur_name',
    'vehicle_registration',
    'birthdate',
    'house_number_name',
    'first_line_address',
    'postcode',
    'phone',
    'insurer',
    'other_name',
    'other_driver_vehicle',
    'other_driver_address',
    'other_driver_contact_number',
    'other_driver_contact_insurer',
    'valid_insurance',
    'date_incident',
    'time_incident',
    'location_incident',
    'weather_condition',
    'brief_description_happened',
    'witnesses_details',
    'passengers_injury',
    'how_about_us',
    'friend_family_referral',
    'additional_comments_details',];

}
