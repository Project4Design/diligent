<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accidents_passengers extends Model
{
    protected $table = "accidents_passengers_injury";

    public $fillable = [
    'id_passengers_injury',
    'id_accidents_injury',
    'passenger_name',
    'passenger_address',
    'passenger_contact_number'];
}
