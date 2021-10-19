<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
     public $fillable = [
        'Name','Telephone','Message','User_id'
    ];

      // THIS function user TO MAKE RELATHION WITH Comment
    public function user()
    {
        return $this->belongsTo('App\User');
    } 
}
