<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Teacher;

class EditController extends Controller
{
    public function __invoke(Lesson $lesson)
    {
        $teachers = Teacher::all();
        // dd($lesson->teachers->value('name'));
        return view('admin.lessons.edit', compact('lesson', 'teachers'));
    }
}
