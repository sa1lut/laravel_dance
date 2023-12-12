<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }
}
