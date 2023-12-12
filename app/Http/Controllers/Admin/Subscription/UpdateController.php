<?php

namespace App\Http\Controllers\Admin\Subscription;

use App\Models\Subscription;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Subscription $subscription)
    {
        $data = request()->validate([
            'title'=> 'string',
            'price'=> 'integer',
            'period'=> 'integer',
            'description'=> 'string',
            'count'=> 'integer',
        ]);

        $subscription->update($data);
        return redirect()->route('admin.subscription.index', $subscription->id);
    }
}
