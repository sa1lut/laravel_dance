<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientSubscription extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];  

    public function clients()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function subscriptions()
    {
        return $this->belongsTo(Subscription::class, 'subscription_id', 'id');
    }
}
