<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nap extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kiddo_id', 'start', 'end', 'notes',
    ];

    public function kiddo()
    {
        $this->belongsTo('App\Kiddo');
    }
}
