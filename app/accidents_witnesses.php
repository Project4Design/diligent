<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accidents_witnesses extends Model
{
    protected $table = "accident_witnesses_details";

    public $fillable = [
    'id_witnesses',
    'id_management_accidents',
    'witness_name',
    'witness_address',
    'witness_contact_number'];
}
