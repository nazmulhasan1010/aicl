<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackSize extends Model
{

    protected $table = 'sizes';
    // Relationship with Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    // Relationship with product variant
    public function variants()
    {
        return $this->hasMany(ProductVariant::class,'packsize_id');
    }

    
}
