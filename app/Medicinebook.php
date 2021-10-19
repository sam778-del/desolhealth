<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Medicine;

class Medicinebook extends Model
{
     public $fillable = [
        'Medicinebook_name','Medicinebook_content','Medicinebook_Quantity','User_id','Medicine_id'
    ];

    protected $with = ['user'];
    /**
     * Get the Medicine that owns the Review.
     */
    public function Medicine()
    {
        return $this->belongsTo('App\Medicine','Medicine_id');
    }
    // THIS function User TO MAKE RELATHION 
    public function user()
    {
        return $this->belongsTo('App\User','User_id');
    } 
}
