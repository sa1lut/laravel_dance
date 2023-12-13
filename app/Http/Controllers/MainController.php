<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Client;
use App\Models\Lesson;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke() {
        $lessons = Lesson::all();
        $lessons = $lessons->splice(0, 3);
        return view('main', compact('lessons'));
    }

    public function contact() {
        return view('layouts.contact');
    }

    public function about() {
        return view('layouts.about');
    }
}
