<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = "cars";

    public $primaryKey = "id";

   public $fillable = [
   'title',
   'firts_name',
   'middle_name',
   'sure_name',
   'birthdate',
   'house_number',
   'first_line_address',
   'postcode',
   'marital_status',
   'employment_status',
   'occupation',
   'business',
   'business_owner',
   'business_type',
   'home_owner',
   'children',
   'email',
   'phone',
   'mobile',
   'contact_via',
   'license_via',
   'date_obtained',
   'license_period_held',
   'license_enter',
   'license_number',
   'dvla_medical_condition',
   'aditional_qualifications',
   'qualifications_obtained',
   'born_uk',
   'became_resident',
   'use_other_vehicle',
   'monitoring_criminal_convictions',
   'motor_accidents',
   'motor_offences',
   'vehicle_registration',
   'vehicle_model',
   'vehicle_registration_year',
   'vehicle_alarms',
   'vehicle_number_seats',
   'vehicle_number_doors',
   'vehicle_engine_size',
   'vehicle_transmission',
   'vehicle_aprox_value',
   'vehicle_modifications',
   'vehicle_modifications_made',
   'vehicle_date_purchase',
   'vehicle_registered_keeper',
   'vehicle_legal_owner',
   'vehicle_inpounded',
   'usage_kept_day',
   'usage_kept_night',
   'usage_kept_same_address',
   'usage_kept_other_address',
   'drivers_insurance_imposed',
   'usage',
   'usage_annual_milage',
   'type_coverage',
   'no_claims',
   'no_claims_earned_uk',
   'no_claims_protect',
   'voluntary_axcess',
   'pay_insurance',
   'policy_start',
   'additional_drive',
   'heard_from_us',
   'referrer',
   'additional_comments'];


   public function cars_motors_accidents()
   {

   	return $this->hasMany(Cars_motors_accidents::class);
   }
}
