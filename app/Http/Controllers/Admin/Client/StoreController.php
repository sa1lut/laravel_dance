<?php

namespace App\Http\Controllers\Admin\Client;

use App\Models\Client;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke()
    {
        $user = request()->validate([
            'login'=> 'string',
            'password'=> 'string',
        ]);
        $user['password'] = bcrypt($user['password']);
        $user = User::create($user);
        

        $client = request()->validate([
            'name'=> 'string',
            'surname'=> 'string',
            'birthday'=> 'string',
            'telephone'=> 'string',
            'user_id' => ''
        ]);
        $client['user_id'] = $user->id;
        $client = Client::create($client);

        return redirect()->route('admin.client.index');
    }
}
