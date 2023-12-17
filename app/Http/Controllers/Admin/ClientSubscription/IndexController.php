<?php

namespace App\Http\Controllers\Admin\ClientSubscription;

use App\Models\ClientSubscription;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $clientSubscriptions = ClientSubscription::all();
        // $clients = $clientSubscriptions->clients;
        // dd($clientSubscriptions->clients);
        // $subscriptions = $clientSubscriptions->subscriptions->all();
        return view('admin.clientsubscription.index', compact('clientSubscriptions'));
    }
}