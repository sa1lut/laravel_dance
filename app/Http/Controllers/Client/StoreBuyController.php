<?php

namespace App\Http\Controllers\Client;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientSubscription;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class StoreBuyController extends Controller
{
    public function __invoke(Subscription $subscription)
    {
        $data = request()->validate([
            'subscription_id' => 'integer',
            'client_id' => 'integer',
            'date_purchase' => 'date',
            'date_end' => 'date'
        ]);
        
        $client = (ClientSubscription::create($data)['client_id']);
        
        return redirect()->route('clients.subscription', compact('client'));
    }
}