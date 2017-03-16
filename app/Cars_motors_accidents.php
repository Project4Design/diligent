<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars_motors_accidents extends Model
{
    protected $table = "cars_motors_accidents";

    public $primaryKey = "id_accidents";

		public $fillable = [
		'id_cars',
		'id_additional_driver',
		'type',
		'date',
		'damage',
		'cost',
		'fault',
		'any_injuries'
		];

    public function car()
    {
    	return $this->belongsTo('App\Cars','id_cars');
    }
}
