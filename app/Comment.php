<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;
use App\Blood;

class Comment extends Model
{
    protected $fillable = [
        'post_id', 'user_id', 'Comment_content','Blood_id','Medicine_id'
    ];

    protected $with = ['user'];
    /**
     * Get the Post that owns the Comment.
     */
    public function post()
    {
        return $this->belongsTo('App\Blog');
    }
    /**
     * Get the Blood that owns the Comment.
     */
    public function Blood()
    {
        return $this->belongsTo('App\Blood');
    }
     // THIS function user TO MAKE RELATHION WITH Comment
    public function user()
    {
        return $this->belongsTo('App\User');
    } 
    /**
     * Get the Medicine that owns the Comment.
     */
    public function Medicine()
    {
        return $this->belongsTo('App\Medicine');
    }
}
