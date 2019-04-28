<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['detail', 'category', 'unit_cost', 'sale_price', 'provider_id', 'cantidad'];

    public function provider() 
    {
    	return $this->belongsTo(Provider::class);
    }
}
