<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Doctor;

class Operation extends Model
{
    public $fillable = [
        'Patient_ID','Date','Operation_Title','Operation_Title_ar','Operation_Title_gr','Operation_Description','Operation_Description_ar',
        'Operation_Description_gr','User_id','active','Operation_image','Operation_slug'
    ];


    // THIS function Doctor TO MAKE RELATHION WITH Doctors
    public function Doctor()
    {
        return $this->belongsTo('App\User');
    }
}
