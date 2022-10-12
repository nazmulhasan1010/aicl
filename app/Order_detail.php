<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    // Relationship with order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
