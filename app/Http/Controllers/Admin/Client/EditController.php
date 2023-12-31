<?php

namespace App\Http\Controllers\Admin\Client;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Client $client)
    {
        // dd($client->users);
        return view('admin.clients.edit', compact('client'));
    }
}
