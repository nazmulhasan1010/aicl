<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Relatioship with user
    public function user()
    {
        return $this->belongsTo(User::class,'customer_id');
    }
    // Relationship with division
    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    // Relationship with distirct
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    // Relationship with upzila
    public function upzila()
    {
        return $this->belongsTo(Upzila::class);
    }

    // Relationship with order details
    public function order_details()
    {
        return $this->hasMany(Order_detail::class);
    }
}
