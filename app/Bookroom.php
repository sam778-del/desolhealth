<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Bedcontroller;

class Bookroom extends Model
{
    public $fillable = [
        'Bookroom_name','Bookroom_content','Bookroom_Quantity','User_id','Bedcontroller_id'
    ];

    protected $with = ['user'];
    /**
     * Get the Blood that owns the Review.
     */
    public function Bedcontroller()
    {
        return $this->belongsTo('App\Bedcontroller','Bedcontroller_id');
    }
    // THIS function User TO MAKE RELATHION 
    public function user()
    {
        return $this->belongsTo('App\User','User_id');
    } 
}
