<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medication extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'variant_id', 'is_over_the_counter', 'interval_unit', 'interval_type',
    ];

    public function prescriptions()
    {
        return $this->hasMany('App\Prescription');
    }

    public function doses()
    {
        return $this->hasMany('App\Doses');
    }
}
