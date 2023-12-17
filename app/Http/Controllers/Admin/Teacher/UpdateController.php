<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Models\Teacher;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Teacher $teacher, TeacherRequest $request)
    {
        // $data = request()->validate([
        //     'name'=> 'string',
        //     'surname'=> 'string',
        //     'birthday'=> 'string',
        //     'telephone'=> 'string',
        //     'image'=> 'file',
        // ]);
        $params = $request->all();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('teacher', 'public');
            $params['image'] = $path;
        }
        $teacher->update($params);
        return redirect()->route('admin.teacher.index', $teacher->id);
    }
}
