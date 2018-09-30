<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kiddo_id', 'nom_type', 'nom_id', 'timestamp', 'notes',
    ];

    public function kiddo()
    {
        $this->belongsTo('App\Kiddo');
    }
    
    public function nom()
    {   
        // need to learn this
        //$this->belongsTo('App\Food|Drink');
    }
}
