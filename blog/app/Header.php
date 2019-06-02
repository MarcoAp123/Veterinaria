<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $fillable = ['user_id', 'client_id', 'type'];

    public function client() 
    {
        return $this->belongsTo(Client::class);
    }

    public function user() 
    {
    	return $this->belongsTo(User::class);
    }

    public function header_products() 
    {
        return $this->hasMany(Header_product::class);
    }

    public function header_services() 
    {
        return $this->hasMany(Header_services::class);
    }
}
