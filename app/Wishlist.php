<?php

namespace App;
use App\User;
use App\Doctor;
use App\Medicine;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
     protected $fillable = [
        'User_id','Medicine_id'
    ];

    protected $with = ['user'];
    
    /**
     * Get the Medicine that owns the Medicine.
     */
    public function Medicine()
    {
        return $this->belongsTo('App\Medicine','Medicine_id');
    }
    // THIS function UserS TO MAKE RELATHION WITH Wishlist
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
