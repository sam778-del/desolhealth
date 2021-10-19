<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Blood;

class Bloodbook extends Model
{
    public $fillable = [
        'Bloodbook_name','Bloodbook_content','Bloodbook_Quantity','User_id','Blood_id'
    ];

    protected $with = ['user'];
    /**
     * Get the Blood that owns the Review.
     */
    public function Blood()
    {
        return $this->belongsTo('App\Blood','Blood_id');
    }
    // THIS function User TO MAKE RELATHION 
    public function user()
    {
        return $this->belongsTo('App\User','User_id');
    } 
}
