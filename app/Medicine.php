<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Patient;
use App\Comment;
use App\Medicinebook;

class Medicine extends Model
{
    public $fillable = [
        'Medicine_Name','Medicine_Name_ar','Medicine_Name_gr','Medicine_Description','Medicine_Description_ar','Medicine_Description_gr','Category_Name','Price','Manufactured_By','Manufactured_By_ar','Manufactured_By_gr','Status','Medicine_image','slug'
    ];
    
    // THIS function comments TO MAKE RELATHION WITH Post
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    // THIS function Medicinebook TO MAKE RELATHION WITH Medicinebook
    public function Medicinebooks()
    {
        return $this->hasMany('App\Medicinebook');
    }
}
