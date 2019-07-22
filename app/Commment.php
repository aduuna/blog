<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commment extends Model
{
    protected $fillable = [
        'body' 
    ];

    /* 
     * the user that made this comment
     */
    public function user()
    {
        $this->belongsTo('App\User');
    }

    /* 
     * the post this comment belong to
     */
    public function post()
    {
        $this->belongsTo('App\Post');
    }
    
}
