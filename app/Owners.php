<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    protected $fillable = [
        'name'
    ];

    public function unicorn()
    {
        return $this->hasMany(Unicorn::class,'id');
    }
}
