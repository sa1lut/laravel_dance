<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function teachers() 
    {
        return $this->hasMany(Teacher::class);
    }

    public function clients() 
    {
        return $this->hasMany(Client::class);
    }
}
