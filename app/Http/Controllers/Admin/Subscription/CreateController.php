<?php

namespace App\Http\Controllers\Admin\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;
use PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber;

class CreateController extends Controller
{
    public function __invoke()
    {
        $lessons = Lesson::all();
        return view('admin.subscriptions.create', compact('lessons'));
    }
}
