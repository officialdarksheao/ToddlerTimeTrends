<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KiddoOverwrite extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_type', 'value',
    ];

    public function kiddo()
    {
        $this->belongsTo('App\Kiddo');
    }
}
