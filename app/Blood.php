<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\User;
use App\Doctor;
use App\Operation;
use App\Patient;
use App\Comment;

class Blood extends Model
{
    
    public $fillable = [
        'Blood_ar','Blood_en','Blood_Gr','created_at','updated_at','slug','Blood_image','Bloodcontent','Bloodcontent_ar','Bloodcontent_gr','Active'
    ];

    // THIS function Patient TO MAKE RELATHION WITH Patient
    public function Patient()
    {
        return $this->HasOne('App\Patient');
    }
    // THIS function Doctor TO MAKE RELATHION WITH Doctor
    public function Doctor()
    {
        return $this->HasOne('App\Doctor');
    }
    // THIS function comments TO MAKE RELATHION WITH Post
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    // THIS function users TO MAKE RELATHION WITH Post
    public function Patients()
    {
        return $this->hasMany('App\Patient');
    }
    // THIS function Bloodbook TO MAKE RELATHION WITH Bloodbook
    public function Bloodbooks()
    {
        return $this->hasMany('App\Bloodbook');
    }
}
