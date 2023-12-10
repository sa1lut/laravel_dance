<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = [];  

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
