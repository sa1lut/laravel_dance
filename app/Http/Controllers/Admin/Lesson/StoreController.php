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
            'image'=> 'file',
        ]);
        if (request()->hasFile('image')) {
            $path = request()->file('image')->store('lesson', 'public');
            $data['image'] = $path;
        }
        $teachers = request('teachers');
        $lesson = Lesson::create($data);

        $lesson->teachers()->attach($teachers);

        return redirect()->route('admin.lesson.index');
    }
}
