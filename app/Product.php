<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship with Pack size
    public function pack()
    {
        return $this->belongsTo(PackSize::class);
    }
    // Relationship with product variant
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
