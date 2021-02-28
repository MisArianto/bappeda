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
        'name',
        'username', 
        'email', 
        'password',
        'level',
        'status',
        'fb',
        'ig',
        'image',
        'bio'
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
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function post()
    {
        return $this->hasOne('App\Models\Post');
    }

    public function isAdmin()
    {
        if ($this->level == 'admin') return true;

        return false; 
    }

    public function isAuthor()
    {
        if ($this->level == 'author') return true;

        return false; 
    }

    public function isUser()
    {
        if ($this->level == 'user') return true;

        return false; 
    }
    


}
