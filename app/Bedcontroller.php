<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\Review;

class Bedcontroller extends Model
{
    public $fillable = [
    'Bed_type','Bed_Type_Ar','Bed_Type_Gr','Description','Description_Ar','Description_Gr','Bed_images','Bed_Capacity','Charge','Active','slug','Department_id'
    ];

    // THIS function Department TO MAKE RELATHION WITH Department
     public function Department()
    {
        return $this->belongsTo('App\Department','Department_id');
    }
     // THIS function Reviews TO MAKE RELATHION WITH USERS
    public function Reviews()
    {
        return $this->hasMany('App\Review','Bed_id');
    }
}
