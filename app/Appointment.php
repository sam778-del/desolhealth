<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Doctor;


class Appointment extends Model
{
    public $fillable = [
        'Patient_ID','Appointment_Date','Serial','Problem','Department_id','user_id','Doctor_id'
    ];
    protected $with = ['user'];
    
    // THIS function User TO MAKE RELATHION
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    } 

    // THIS function Doctor TO MAKE RELATHION
    public function doctor()
    {
        return $this->belongsTo('App\User','Doctor_id');
    }
}
