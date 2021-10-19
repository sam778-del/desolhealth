<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\Department;
use App\User;

class Country extends Model
{
    public $fillable = [
        'id','ar_name','en_name','code','image_path'
    ];

    // THIS function Doctor TO MAKE RELATHION WITH Department
    public function Doctor()
    {
        return $this->HasOne('App\Doctor');
    }
}
