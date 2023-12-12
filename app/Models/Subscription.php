<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function clientSubscriptions()
    {
        return $this->hasMany(ClientSubscription::class);
    }

    public function lessons() 
    {
        return $this->belongsToMany(Lesson::class);
    }
}
