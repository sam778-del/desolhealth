<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;
use App\Comment;

class Post extends Model
{
    public $fillable = [
        'author_id','category_id','title','seo_title','excerpt','body','image','slug',
        'meta_description','meta_keywords','status','featured','title_ar','title_gr','body_ar','body_gr'
    ];

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
    // THIS function comments TO MAKE RELATHION WITH Post
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
