<?php

namespace App\Http\Controllers\Lesson;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Lesson $lesson)
    {
        $subscriptions = $lesson->subscriptions;
        return view('lessons.show', compact('lesson', 'subscriptions'));
    }
}