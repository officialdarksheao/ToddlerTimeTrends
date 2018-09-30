<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOverwrite extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_type', 'value',
    ];

    public function user()
    {
        $this->belongsTo('App\User');
    }
}
