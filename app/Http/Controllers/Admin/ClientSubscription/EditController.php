<?php

namespace App\Http\Controllers\Admin\ClientSubscription;

use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Models\ClientSubscription;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(ClientSubscription $clientSubscription)
    {
        $statuses = [
            0 => 'Отменен',
            1 => 'Забронирован',
            2 => 'Оплачен',
        ];
        // dd($client->users);
        return view('admin.clientsubscription.edit', compact('clientSubscription', 'statuses'));
    }
}
