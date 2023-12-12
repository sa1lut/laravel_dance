<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Teacher $teacher)
    {
        $data = request()->validate([
            'name'=> 'string',
            'surname'=> 'string',
            'birthday'=> 'string',
            'telephone'=> 'string',
            'image'=> 'file',
        ]);
        if (request()->hasFile('image')) {
            $path = request()->file('image')->store('teacher', 'public');
            $data['image'] = $path;
        }
        $teacher->update($data);
        return redirect()->route('admin.teacher.index', $teacher->id);
    }
}
