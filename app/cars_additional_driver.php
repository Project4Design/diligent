<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cars_additional_driver extends Model
{
    protected $table = "cars_additional_driver";

    public $fillable = [
    'id_cars_additional',
    'ca_title',
    'additional_driver1',
    'ca_first_name',
    'ca_middle_name',
    'ca_sur_name',
    'ca_relationship',
    'ca_birthdate',
    'ca_marital_status',
    'ca_employment_status',
    'ca_employed_occupation',
    'ca_employed_occupation',
    'ca_employed_business',
    'ca_type_license',
    'ca_period_license',
    'ca_date_provitional_license',
    'ca_license_enter',
    'ca_license_number',
    'ca_dvla_medical',
    'ca_born_uk',
    'ca_uk_resident',
    'ca_other_vehicle',
    'ca_non_motoring_convictions',
    'ca_motor_accidents',
    'ca_motor_offences'];

    public $timestamps = false;
}
