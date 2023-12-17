<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Client $client)
    {
        $data = request()->validate([
            'name'=> 'string',
            'surname'=> 'string',
            'birthday'=> 'string',
            'telephone'=> 'string',
        ]);
        $userData = request()->validate([
            'login' => 'string',
            'password' => 'string',
        ]);
        dd($userData = request('password'));
        $user = $client->user;
        $user->update($userData);
        $client->update($data);
        // dd(11);
        return view('clients.edit', compact('client'));
    }
}