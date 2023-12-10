<?php

namespace App\Http\Controllers\Lesson;

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
        Lesson::create($data);

        return redirect()->route('lesson.index');
    }
}
