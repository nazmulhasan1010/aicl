<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Relationship with Product
    public function products()
    {
        return $this->HasMany(Product::class);
    }
}
