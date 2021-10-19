<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HumanResource extends Model
{
    public $fillable = [
        'role_id','name','email','avatar','email_verified_at','password','remember_token','settings','created_at','updated_at','Designation','Designation_ar','Designation_Gr','Department','Address','Phone_No','Short_Biography','Specialist','Specialist_ar','Specialist_Gr','Date_of_Birth','Blood_Group','Education_Degree','Status','Male','Female'
    ];
}
