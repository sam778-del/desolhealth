<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bedcontroller;
use App\Doctor;

class Department extends Model
{
    public $fillable = [
        'Department_Name','Department_Name_ar','Department_Name_Gr',
        'Department_Description','Department_Description_ar','Department_Description_Gr','Status','Department_images','slug'
    ];

    // THIS function Bedcontroller TO MAKE RELATHION WITH Department
    public function Bedcontrollers()
    {
        return $this->hasMany('App\Bedcontroller');
    }

    // THIS function Doctor TO MAKE RELATHION WITH Department
    public function Doctors()
    {
        return $this->hasMany('App\Doctor');
    }
}
