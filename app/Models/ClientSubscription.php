<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientSubscription extends Model
{
    use HasFactory;
    protected $guarded = [];  

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'client_subscriptions', 'client_id', 'subscription_id');
    }

    public function subscriptions()
    {
        return $this->belongsToMany(Subscription::class, 'client_subscriptions', 'subscription_id', 'client_id');
    }
}
