<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upzila extends Model
{
    protected $table = "upazilas";
    // Relationship with order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
