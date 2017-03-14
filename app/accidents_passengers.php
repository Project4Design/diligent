<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accidents_passengers extends Model
{
    protected $table = "accident_passengers_injury";

    protected $primaryKey = "id_passengers_injury";

    public $fillable = [
    'id_accidents_injury',
    'passenger_name',
    'passenger_address',
    'passenger_contact_number'];
}
