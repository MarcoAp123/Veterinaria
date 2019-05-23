<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_body extends Model
{
    protected $fillable = ['service_header_id', 'product_id', 'service_id', 'cantidad'];

    public function service_body() 
    {
        return $this->belongsTo(Service_body::class);
    }

    public function products() 
    {
        return $this->hasMany(Product::class);
    }
}
