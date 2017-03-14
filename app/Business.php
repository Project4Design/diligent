<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
   protected $table = "business";

   public $primaryKey = "id_insurance_bussiness";

   public $fillable = [
   'title',
   'first_name',
   'middle_name',
   'sur_name',
   'birthdate',
   'employment_status',
   'occupation',
   'business_type',
   'mobile_telephone',
   'email',
   'house_number',
   'house_first_line',
   'postcode',
   'stablished_address',
   'house_number_correspondence',
   'house_address_correspondence',
   'postcode_correspondence',
   'current_insurer',
   'company_status',
   'bussiness_name',
   'business_description',
   'specify_business',
   'date_bussiness',
   'total_employees',
   'stimated_annual_turnover',
   'stimated_annual_wages',
   'premises_located',
   'opening_hours_business',
   'any_cctv',
   'premises_building',
   'roof_slope',
   'floor_wood',
   'walls_wood',
   'live_upstair',
   'doors_shutters',
   'premises_occupied',
   'roller_shutter',
   'grilles_fitted',
   'alarm_premises',
   'type_alarm',
   'alarm_notify',
   'checked_organization',
   'premises_comercial',
   'if_running',
   'premises_owned_rented',
   'require_building_cover',
   'maximum_cash',
   'cash_premises',
   'cigarettes_insured',
   'wines_insured',
   'frozen_insured',
   'other_stock',
   'contents_insured',
   'contents_other_insured',
   'have_losses_accidents',
   'paying_paye',
   'employer_reference',
   'policy_start',
   'additional_comments'
   ];


   public function details()
   {
   	return $this->hasOne('App\Business_details', 'business_id');
   }
}
