<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\User;

class Birth extends Model
{
    public $fillable = [
        'Birth_name','Birth_name_ar','Birth_name_gr','Birth_content','Birth_content_ar','Birth_content_gr','Birth_image','doctor_id','Patient_ID'
    ];

    
    // THIS function Doctor TO MAKE RELATHION WITH Doctors
    public function Doctor()
    {
        return $this->belongsTo('App\User');
    }
    
}
