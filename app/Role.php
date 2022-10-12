<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Relationship with user
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
