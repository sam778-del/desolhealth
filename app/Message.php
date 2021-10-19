<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Message extends Model
{
    public $fillable = [
        'Message_name','Message_content','user_id','res_id'
    ];

    // THIS function user TO MAKE RELATHION WITH Category
    public function user()
    {
        return $this->belongsTo('App\User');
    } 
}
