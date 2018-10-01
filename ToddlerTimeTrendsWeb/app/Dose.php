<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dose extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kiddo_id', 'medication_id', 'timestamp',
    ];

    public function kiddo()
    {
        $this->belongsTo('App\Kiddo');
    }

    public function medication()
    {
        $this->belongsTo('App\Medication');
    }
}
