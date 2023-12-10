<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title'=> 'string',
            'image'=> 'string',
            'direction'=> 'string',
        ]);
        $teacher_id = request('teachers');
        // dd($teacher_id);
        $lesson = Lesson::create($data);

        // dd($lesson_teacher);
        $lesson->teachers()->attach($teacher_id);

        return redirect()->route('admin.lesson.index');
    }
}
