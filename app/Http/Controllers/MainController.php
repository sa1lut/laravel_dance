<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Client;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke() {
        // print(Teacher::where('user_id', '=', auth()->user()->id)->value('name'));
        return view('main');
    }
}
