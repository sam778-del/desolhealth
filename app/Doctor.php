<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\User;
use App\Blood;
use App\Country;
use App\Review;
use App\Appointment;

class Doctor extends Model

{

	public $fillable = [
        'Designation','Designation_ar','Designation_Gr','Department_id','Phone_No','Short_Biography','Specialist',
        'Specialist_ar','Specialist_Gr','Date_of_Birth','Blood_id','Education_Degree','Male','Female',
        'Country_id','User_id','Address','active'
    ];


    // THIS function Department TO MAKE RELATHION WITH Department
     public function department()
    {
        return $this->belongsTo('App\Department','Department_id');
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

    // THIS function Blood TO MAKE RELATHION WITH Blood
    public function Blood()
    {
        return $this->belongsTo('App\Blood','Blood_id');
    } 
    
    // THIS function Blood TO MAKE RELATHION WITH Blood
    public function Appointment()
    {
        return $this->belongsTo('App\Appointment');
    } 
    
}
