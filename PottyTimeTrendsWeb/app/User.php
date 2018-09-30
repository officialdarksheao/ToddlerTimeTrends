<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function kiddos()
    {
        // makes assumption Kiddos table has user_id
        return $this->hasMany('App\Kiddo');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }

}
