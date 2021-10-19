<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Doctor;
use App\Bedcontroller;

class Review extends Model
{
    public $fillable = [
        'Doctor_id','User_id','Reviews_content','Reviews','Bed_id'
    ];

    protected $with = ['user'];
    /**
     * Get the Product that owns the Review.
     */
    public function Doctor()
    {
        return $this->belongsTo('App\Doctor','Doctor_id');
    }
    // THIS function User TO MAKE RELATHION WITH Product
    public function user()
    {
        return $this->belongsTo('App\User','User_id');
    } 
    // THIS function Bed TO MAKE RELATHION WITH Bed
    public function Bed()
    {
        return $this->belongsTo('App\Bedcontroller','Bed_id');
    } 
}
