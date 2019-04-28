<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'address'];

    public function products() 
    {
        return $this->hasMany(Products::class);
    }
}
