<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars_motors_accidents extends Model
{
    

    public function cars()
    {
    	return $this->belongsTo(Cars::class);
    }
}