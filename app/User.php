<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Birth;
use App\Post;
use App\Doctor;
use App\Operation;
use App\Patient;
use App\Comment;
use App\Message;
use App\Review;
use App\Appointment;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'id','role_id','name','email','avatar','email_verified_at','password','remember_token','settings','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // THIS function Birth TO MAKE RELATHION WITH Birth
     public function Birth()
    {
        return $this->belongsTo('App\Birth','doctor_id');
    }

    // THIS function Operation TO MAKE RELATHION WITH Operation
     public function Operation()
    {
        return $this->belongsTo('App\Operation','doctor_id');
    }

    // THIS function Post TO MAKE RELATHION WITH USERS
     public function posts()
    {
        return $this->hasMany('App\Post');
    }

    // THIS function Doctor TO MAKE RELATHION WITH Department
    public function Doctor()
    {
        return $this->HasOne('App\Doctor');
    }
    
    // THIS function Patient TO MAKE RELATHION WITH Patient
    public function Patient()
    {
        return $this->HasOne('App\Patient');
    }
     // THIS function comments TO MAKE RELATHION WITH USERS
     public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    // THIS function Message TO MAKE RELATHION WITH Message
     public function Messages()
    {
        return $this->HasMany('App\Message');
    }

    // THIS function Reviews TO MAKE RELATHION WITH USERS
    public function Reviews()
    {
        return $this->hasMany('App\Review','Doctor_id');
    }
    // THIS function Appointments TO MAKE RELATHION WITH USERS
    public function Appointments()
    {
        return $this->hasMany('App\Appointment','Doctor_id');
    }
}
