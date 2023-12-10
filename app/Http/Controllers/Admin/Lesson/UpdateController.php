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
            'image'=> 'string',
            'direction'=> 'string',
        ]);
        $lesson->update($data);
        return redirect()->route('admin.lesson.edit', $lesson->id);
    }
}
