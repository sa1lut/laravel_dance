<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __invoke(Client $client)
    {
        if (!Auth::check()){
            return redirect()->route('main.index');
        }
        // dd(11);
        return view('clients.edit', compact('client'));
    }
}