<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accidents_witnesses extends Model
{
    protected $table = "accident_witnesses_details";

    public $primaryKey = "id_witnesses";

    public $fillable = [
    'id_management_accidents',
    'witness_name',
    'witness_address',
    'witness_contact_number'];

     public function accidents()
    {
    	return $this->belongsTo('App\Accidents');
    }
}
