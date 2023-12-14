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
        $clientSubscription = $subscription->clientSubscriptions;
        // dd($subscription);
        if ($clientSubscription->value('subscription_id') !== $data['subscription_id'] && $data['date_end'] > $clientSubscription->value('date_end')){
            // if ($data['date_end'] <= $clientSubscription->value('date_end')) {
            //     $data['date_end'] = date($data['date_end'])->date_modify('+' . $subscription->period . 'month');
            //     dd($data['date_end']);
            // }
            $client = (ClientSubscription::create($data)['client_id']);
        
            return redirect()->route('clients.subscription', compact('client'));
            
            // dd($data); 
        }
        
        $client = $data['client_id'];
            return redirect()->route('clients.subscription', compact('client'));
        
    }
}