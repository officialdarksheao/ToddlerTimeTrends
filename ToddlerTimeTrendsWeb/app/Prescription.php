<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prescription extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kiddo_id', 'medication_id', 'interval_unit', 'interval_type', 'start', 'end', 'is_prn', 'notes',
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
