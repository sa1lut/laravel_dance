<?php

namespace App\Http\Controllers\Admin\Client;

use App\Models\Client;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(UserRequest $userRequest, ClientRequest $clientRequest)
    {
        // $user = request()->validate([
        //     'login'=> 'string',
        //     'password'=> 'string',
        // ]);
        $userData = $userRequest->only(['login', 'password']);
        $userData['password'] = bcrypt($userData['password']);
        // $user['password'] = bcrypt($user['password']);
        $user = User::create($userData);
        

        // $client = request()->validate([
        //     'name'=> 'string',
        //     'surname'=> 'string',
        //     'birthday'=> 'string',
        //     'telephone'=> 'string',
        //     'user_id' => ''
        // ]);
        $clientData = $userRequest->only(['surname', 'name', 'birthday', 'telephone']);
        $clientData['user_id'] = $user->id;
        $client = Client::create($clientData);

        return redirect()->route('admin.client.index');
    }
}
