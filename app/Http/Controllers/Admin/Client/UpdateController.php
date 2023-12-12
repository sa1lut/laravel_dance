<?php

namespace App\Http\Controllers\Admin\Client;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Client $client)
    {
        $data = request()->validate([
            'name'=> 'string',
            'surname'=> 'string',
            'birthday'=> 'string',
            'telephone'=> 'string',
        ]);

        $client->update($data);
        return redirect()->route('admin.client.index', $client->id);
    }
}
