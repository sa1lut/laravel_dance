<?php

namespace App\Http\Controllers\Client;

use App\Models\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateBuyController extends Controller
{
    public function __invoke()
    {
        if (!Auth::check()) {
            return redirect(route('auth.login'));
        }

        $subscription = Subscription::find(request('subscription'));
        $lesson = request('lesson');
        
        return view('clients.buy', compact('subscription', 'lesson'));
    }
}