<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke()
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
        $teacher = Teacher::create($data);
        return redirect()->route('admin.teacher.index');
    }
}
