<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\Bedcontroller;
use App\Country;
use App\User;
use App\Doctor;
use App\Operation;
use App\Blood;
use App\Medicine;

class Patient extends Model
{
    public $fillable = [
        'Patient_ID','Patient_Phone','Patient_Mobile','Patient_Sex','Blood_id','Status',
        'Date_of_Birth','Patient_Age','User_id','Doctor_id','Department_id','Country_id','Bed_id','Medicine_id'
    ];


    // THIS function Department TO MAKE RELATHION WITH Department
     public function department()
    {
        return $this->belongsTo('App\Department','Department_id');
    }
    // THIS function Bedcontroller TO MAKE RELATHION WITH Bedcontroller
     public function Bed()
    {
        return $this->belongsTo('App\Bedcontroller','Bed_id');
    }
    // THIS function Country TO MAKE RELATHION WITH Country
     public function Country()
    {
        return $this->belongsTo('App\Country','Country_id');
    }
    // THIS function User TO MAKE RELATHION WITH Identificatione
    public function user()
    {
        return $this->belongsTo('App\User','User_id');
    } 
    // THIS function Doctor TO MAKE RELATHION WITH Doctor
    public function Doctor()
    {
        return $this->belongsTo('App\User','Doctor_id');
    } 
    // THIS function Blood TO MAKE RELATHION WITH Blood
    public function Blood()
    {
        return $this->belongsTo('App\Blood','Blood_id');
    } 

}
