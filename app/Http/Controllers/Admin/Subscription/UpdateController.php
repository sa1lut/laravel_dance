<?php

namespace App\Http\Controllers\Admin\Subscription;

use App\Models\Subscription;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriptionRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Subscription $subscription, SubscriptionRequest $request)
    {
        // $data = request()->validate([
        //     'title'=> 'string',
        //     'price'=> 'integer',
        //     'period'=> 'integer',
        //     'description'=> 'string',
        //     'count'=> 'integer',
        // ]);

        $subscription->update($request->all());
        return redirect()->route('admin.subscription.index', $subscription->id);
    }
}
