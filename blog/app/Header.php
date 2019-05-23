<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $fillable = ['user_id', 'client_id'];

    public function clients() 
    {
        return $this->belongsToMany(Client::class, 'headers', 'user_id', 'client_id');
    }
    public function users() 
    {
    	return $this->belongToMany(User::class, 'headers', 'user_id', 'client_id');
    }
}
