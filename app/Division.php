<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    // Relationship with order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
