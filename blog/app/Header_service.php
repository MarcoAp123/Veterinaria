<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header_service extends Model
{
    protected $fillable = ['header_id', 'service_id', 'name', 'type_pet', 'preintervention_state', 'applied_procedure', 'size', 'age_pet', 'weight_pet', 'cost', 'recipe'];

    public function product() 
    {
        return $this->belongsTo(Product::class);
    }

    public function header() 
    {
        return $this->belongsTo(Header::class);
    }
}
