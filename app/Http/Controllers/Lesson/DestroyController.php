<?php

namespace App\Http\Controllers\Lesson;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('lesson.index');
    }
}
