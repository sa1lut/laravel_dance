<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    // public function subscriptions()
    // {
    //     return $this->hasMany(Subscription::class);
    // }
}
