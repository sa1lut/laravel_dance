<?php

namespace App\Http\Controllers\Admin\Subscription;

use App\Models\Subscription;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title'=> 'string',
            'price'=> 'integer',
            'period'=> 'integer',
            'description'=> 'string',
            'count'=> 'integer',
            'lesson_id'=> 'integer',
        ]);
        // dd(request());
        $subscription = Subscription::create($data);
        return redirect()->route('admin.subscription.index');
    }
}
