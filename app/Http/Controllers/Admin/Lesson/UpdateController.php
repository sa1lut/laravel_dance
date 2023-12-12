<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Lesson $lesson)
    {
        $data = request()->validate([
            'title'=> 'string',
            'image'=> 'file',
            'direction'=> 'string',
        ]);
        if (request()->hasFile('image')) {
            $path = request()->file('image')->store('lesson', 'public');
            $data['image'] = $path;
        }
        $lesson->update($data);
        return redirect()->route('admin.lesson.index', $lesson->id);
    }
}
