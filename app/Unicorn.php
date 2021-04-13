<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unicorn extends Model
{
    protected $fillable = [
        'name', 'color', 'owned_by',
    ];

    public function owner()
    {
        return $this->hasOne(Owners::class,'id','owned_by');
    }
}
