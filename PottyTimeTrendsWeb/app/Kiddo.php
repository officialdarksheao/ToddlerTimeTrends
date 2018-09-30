<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kiddo extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'level_id', 'birth_date',
    ];

    public function user()
    {
        $this->belongsTo('App\User');
    }

    public function kiddo_overwrites()
    {
        return $this->hasMany('App\KiddoOverwrite');
    }

    public function promotions()
    {
        return $this->hasMany('App\Promotion');
    }

    public function gos()
    {
        return $this->hasMany('App\Go');
    }

    public function naps()
    {
        return $this->hasMany('App\Nap');
    }

    public function meals()
    {
        return $this->hasMany('App\Meal');
    }

    public function routines()
    {
        return $this->hasMany('App\Routine');
    }

    public function prescriptions()
    {
        return $this->hasMany('App\Prescription');
    }

    public function doses()
    {
        return $this->hasMany('App\Dose');
    }
}
