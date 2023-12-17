<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Models\ClientSubscription;
use App\Models\Lesson;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function __invoke(Client $client)
    {
        if (!Auth::check()){
            return redirect()->route('main.index');
        }
        $subscriptions = $client->clientSubscriptions->map(fn( $item )=> Subscription::find($item->get('subscription_id')));
        $subscriptions = $subscriptions->flatten()->all();
        $lessons = collect($subscriptions)->map(fn( $item )=> Lesson::find($item->get('lesson_id')))->flatten()->all();
        $clients = $client->clientSubscriptions;
        // dd($clients);
        // dd($client->clientSubscriptions->all());
        return view('clients.subscription', compact('clients', 'subscriptions', 'lessons'));
    }
}