<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['product_id', 'cantidad'];

    public function product() 
    {
        return $this->belongsTo(Product::class);
    }
}
