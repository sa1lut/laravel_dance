<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        if (!Auth::check()){
            return redirect()->route('main.index');
        }
        $clients = auth()->user()->clients;
        foreach ($clients as $item) {
            if (auth()->user()->id === $item['user_id']) {
                $client = $item;
            }
        }
        return view('clients.index', compact('client'));
    }
}