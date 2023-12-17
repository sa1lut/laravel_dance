<?php

namespace App\Http\Controllers\Admin\ClientSubscription;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\TextUI\Output\Default\ProgressPrinter\Subscriber;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.clients.create');
    }
}
