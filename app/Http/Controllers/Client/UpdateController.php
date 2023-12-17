<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Client $client, UserRequest $userRequest, ClientRequest $clientRequest)
    {
        // $data = request()->validate([
        //     'name'=> 'string',
        //     'surname'=> 'string',
        //     'birthday'=> 'string',
        //     'telephone'=> 'string',
        // ]);
        // $userData = request()->validate([
        //     'login' => 'string',
        //     'password' => 'string',
        // ]);
        // dd($userData = request('password'));
        
        if ($userRequest['password']) {
            $userData = $userRequest->only(['login', 'password']);
            $userData['password'] = bcrypt($userData['password']);
        }
        else {
            $userData = $userRequest->only('login');
            $userData['password'] = $client->user->password;
        }
        
        $clientData = $userRequest->only(['surname', 'name', 'birthday', 'telephone']);
        $user = $client->user;
        $user->update($userData);
        $client->update($clientData);
        // dd(11);
        return redirect()->route('client.index', $user->id);
    }
}