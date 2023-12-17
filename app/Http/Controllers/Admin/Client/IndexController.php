<?php

namespace App\Http\Controllers\Admin\Client;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $clients = Client::paginate(10);
        return view('admin.clients.index', compact('clients'));
    }
}