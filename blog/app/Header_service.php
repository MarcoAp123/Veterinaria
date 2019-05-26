<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header_service extends Model
{
    protected $fillable = ['header_id', 'service_id', 'cantidad'];

    public function product() 
    {
        return $this->belongsTo(Product::class);
    }

    public function header() 
    {
        return $this->belongsTo(Header::class);
    }
}
