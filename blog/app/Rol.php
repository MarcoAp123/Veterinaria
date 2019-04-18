<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
	protected $fillable = ['name', 'description'];
	//funcion para relacionar 1 rol a n usuarios 
    public function users() 
    {
    	return $this->hasMany(User::class);
    }
}
