<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Lesson $lesson)
    {
        return view('admin.lessons.edit', compact('lesson'));
    }
}
