<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Casemanger extends Model
{
    public $fillable = [
        'Patient','Case_Manager','RefDoctor_Name','Hospital_Name','Hospital_Address','Doctor_Name','Status'
    ];
}
