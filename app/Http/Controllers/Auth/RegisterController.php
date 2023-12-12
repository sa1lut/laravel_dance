<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Client;

class RegisterController extends Controller
{
    public function __invoke() {
        return view('auth.register');
    }

    public function register(Request $request) {
        if (Auth::check()) {
            return redirect(route('main.index'));
        }
        $user = $request->validate([
            'login'=> 'string',
            'password'=> 'string',
        ]);
        $user['password'] = bcrypt($user['password']);
        $user = User::create($user);
        

        $client = $request->validate([
            'name'=> 'string',
            'surname'=> 'string',
            'birthday'=> 'string',
            'telephone'=> 'string',
            'user_id' => ''
        ]);
        $client['user_id'] = $user->id;
        $client = Client::create($client);

        Auth::login($user);
        
        return redirect(route('main.index'));
    }
}
