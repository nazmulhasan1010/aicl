<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $guarded = ['id'];
    // Relationship  with product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relationship with size
    public function size()
    {
        return $this->belongsTo(PackSize::class);
    }
}
