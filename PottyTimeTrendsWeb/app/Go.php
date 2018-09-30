<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Go extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kiddo_id', 'go_type', 'is_accident', 'is_scheduled', 'timestamp', 'notes',
    ];

    public function kiddo()
    {
        $this->belongsTo('App\Kiddo');
    }
}
