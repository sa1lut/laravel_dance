<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use App\Http\Requests\LessonRequest;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(LessonRequest $request)
    {
        // $data = request()->validate([
        //     'title'=> 'string',
        //     'image'=> 'file',
        // ]);
        if ($request->hasFile('image')) {
            $path = request()->file('image')->store('lesson', 'public');
            $data['image'] = $path;
        }
        // dd($request->all());
        $teachers = $request['teachers'];
        $lesson = Lesson::create($request->except('teachers'));

        $lesson->teachers()->attach($teachers);

        return redirect()->route('admin.lesson.index');
    }
}
