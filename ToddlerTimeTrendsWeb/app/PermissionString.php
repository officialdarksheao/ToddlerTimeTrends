<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionString extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'value',
    ];

    public function roles()
    {
        return $this->belongsToMany('\App\Role')->withTimestamps();
    }
}
