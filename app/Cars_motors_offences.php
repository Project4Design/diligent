<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars_motors_offences extends Model
{
    
    protected $table = "Cars_motors_offences";


	public $timestamps=false;


    public function cars()
    {
    	return $this->belongsTo(Cars::class);
    }
}
