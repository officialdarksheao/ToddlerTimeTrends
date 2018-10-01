<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Routine extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kiddo_id', 'name', 'task_type', 'task_id', 'day', 'time', 'notes',
    ];

    public function kiddo()
    {
        $this->belongsTo('App\Kiddo');
    }
    
    public function task()
    {   
        // need to learn this
        //$this->belongsTo('App\*?');
    }
}
