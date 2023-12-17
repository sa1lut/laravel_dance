<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use App\Http\Requests\LessonRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Lesson $lesson, LessonRequest $request)
    {
        // $data = request()->validate([
        //     'title'=> 'string',
        //     'image'=> 'file',
        // ]);
        $params = $request->all();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('lesson', 'public');
            $params['image'] = $path;
            
        }
        $teachers = $params['teachers'];
        unset($params['teachers']);
        // dd($request->except('teachers'));
        $lesson->update($params);
        
        $lesson->teachers()->sync($teachers);
        return redirect()->route('admin.lesson.index', $lesson->id);
    }
}
