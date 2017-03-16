<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vans_motors_fixed extends Model
{
  protected $table = "van_fixed";


  public $timestamps = false;

  public function vans()
  {
  	return $this->belongsTo(Vans::class);
  }
}
