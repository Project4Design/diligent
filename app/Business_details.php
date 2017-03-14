<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business_details extends Model
{
  protected $table = "relations_business";

  public $primaryKey = "id_relations_business";

  public $fillable = [
		'business_id',
		'porcentage_collection',
		'many_persons',
		'often_kitchen',
		'basket_fryer',
		'maximum_occupy',
  ];
}
