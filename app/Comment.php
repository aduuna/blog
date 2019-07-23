<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body' 
    ];

    /* 
     * the user that made this comment
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /* 
     * the post this comment belong to
     */
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
