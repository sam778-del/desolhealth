<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;


class Category extends Model
{
    public $fillable = [
        'parent_id','order','name','slug'
    ];

    // THIS function Posts TO MAKE RELATHION WITH Posts
    public function Posts()
    {
        return $this->hasMany('App\Blog','category_id');
    }
}
