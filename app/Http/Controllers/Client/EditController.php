<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Client $client)
    {
        // dd(11);
        return view('clients.edit', compact('client'));
    }
}