<?php

namespace App\Http\Controllers\Client;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientSubscription;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreBuyController extends Controller
{
    public function __invoke(Subscription $subscription, Request $request)
    {
        if (!Auth::check()){
            return redirect()->route('main.index');
        }
        $clientSubscription = $subscription->clientSubscriptions;
        if ($clientSubscription->value('subscription_id') !== $request['subscription_id'] && $request['date_end'] > $clientSubscription->value('date_end'))
        {

            unset($request['lesson_id']);
            $client = (ClientSubscription::create($request->all())['client_id']);
        
            return redirect()->route('clients.subscription', compact('client'));
        }
        
        $client = $request['client_id'];
        return redirect()->route('clients.subscription', compact('client'));
    }
}