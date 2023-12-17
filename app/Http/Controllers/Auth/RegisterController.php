<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Client;

class RegisterController extends Controller
{
    public function __invoke() {
        return view('auth.register');
    }

    public function register(UserRequest $userRequest, ClientRequest $clientRequest) {
        if (Auth::check()) {
            return redirect(route('main.index'));
        }
        $userData = $userRequest->only(['login', 'password']);
        

        // $user = $request->validate([
        //     'login'=> 'string',
        //     'password'=> 'string',
        // ]);
        $userData['password'] = bcrypt($userData['password']);
        $user= User::create($userData);
        // dd($user);

        // $client = $request->validate([
        //     'name'=> 'string',
        //     'surname'=> 'string',
        //     'birthday'=> 'string',
        //     'telephone'=> 'string',
        //     'user_id' => ''
        // ]);
        $clientData = $userRequest->only(['surname', 'name', 'birthday', 'telephone']);
        $clientData['user_id'] = $user->id;
        $client = Client::create($clientData);

        Auth::login($user);
        
        return redirect(route('main.index'));
    }
}
