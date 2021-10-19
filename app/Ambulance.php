<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Ambulance extends Model
{
    public $fillable = [
        'Telephone','Detailed_Address'
    ];
}
