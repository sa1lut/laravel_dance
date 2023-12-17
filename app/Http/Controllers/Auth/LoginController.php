<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke() {
        return view('auth.login');
    }

    public function login(Request $request) {
        if (Auth::check()) {
            return redirect(route('main.index'));
        }

        // $request->validate([
        //     'login' => 'required', 
        //     'password' => 'required'
        // ]);
        $formFields = $request->only(['login', 'password']);
        // dd($formFields);
        if (Auth::attempt($formFields)) {
            $request->session()->regenerate();
            
            return redirect()->intended(route('main.index'));
        }
        return redirect(route('auth.login'))->withErrors([
            'formError' => 'Неправильный логин или пароль'
        ]);;
    }
}
