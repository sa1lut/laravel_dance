<?php

namespace App\Http\Controllers\Admin\Subscription;

use App\Models\Subscription;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriptionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(SubscriptionRequest $request)
    {
        // $data = request()->validate([
        //     'title'=> 'string',
        //     'price'=> 'integer',
        //     'period'=> 'integer',
        //     'description'=> 'string',
        //     'lesson_id'=> 'integer',
        // ]);
        // dd($request);
        $subscription = Subscription::create($request->all());
        return redirect()->route('admin.subscription.index');
    }
}
