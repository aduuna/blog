<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Define relationship for Post model
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
    /**
     * Define the relationship to Comment model
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    // /**
    //  * Convenient function for checking SuperAdmin
    //  * 
    //  * Only One SuperAdmin is Allowed on the system
    //  * i.e. The First User added
    //  * 
    //  * @return bool
    //  */
    // public function isSuperAdmin()
    // {
    //     return $this->id == 1;
    // }

    // /**
    //  * Convenient function for checking Staff
    //  * 
    //  * @return bool
    //  */
    // public function isStaff()
    // {
    //     return $this->is_staff;
    // }
}
