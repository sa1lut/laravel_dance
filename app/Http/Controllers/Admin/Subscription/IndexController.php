<?php

namespace App\Http\Controllers\Admin\Subscription;

use App\Models\Subscription;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $subscriptions = Subscription::all();
        // dd($subscriptions->lessons);
        return view('admin.subscriptions.index', compact('subscriptions'));
    }
}