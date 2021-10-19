<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // THIS function Category TO MAKE RELATHION WITH Category
    public function Category()
    {
        return $this->belongsTo('App\Category');
    }

    // THIS function user TO MAKE RELATHION WITH Post
    public function user()
    {
        return $this->belongsTo('App\User','author_id');
    } 
}
