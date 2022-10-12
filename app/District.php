<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    // Relationship with order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
