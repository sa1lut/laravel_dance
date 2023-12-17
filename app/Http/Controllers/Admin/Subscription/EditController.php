<?php

namespace App\Http\Controllers\Admin\Subscription;

use App\Models\Subscription;
use App\Models\Lesson;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Subscription $subscription)
    {
        $lessons = Lesson::all();
        return view('admin.subscriptions.edit', compact('subscription', 'lessons'));
    }
}
