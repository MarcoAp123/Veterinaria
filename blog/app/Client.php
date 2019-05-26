<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'ci', 'nit'];

    public function headers() 
    {
    	return $this->hasMany(Header::class);
    }
}
