<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'date_published'
    ];

    /*
     * the Posts that belong to the user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /*
     * fetch the comments related to this post
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
}
