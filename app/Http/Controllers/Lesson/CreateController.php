<?php

namespace App\Http\Controllers\Lesson;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\Teacher;
use Illuminate\Http\Request;
use PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber;

class CreateController extends Controller
{
    public function __invoke()
    {
        $teachers = Teacher::all();
        $subcriptions = Subscription::all();
        return view('lessons.create', compact('teachers', 'subcriptions'));
    }
}
