<?php

namespace App\Http\Controllers\Lesson;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $lessons = Lesson::all();
        return view('lessons.index', compact('lessons'));
    }
}