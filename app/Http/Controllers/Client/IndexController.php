<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $clients = auth()->user()->clients;
        foreach ($clients as $item) {
            if (auth()->user()->id === $item['user_id']) {
                $client = $item;
            }
        }
        return view('clients.index', compact('client'));
    }
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }
}