<?php

namespace App\Http\Controllers\Admin\Client;

use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Client $client, ClientRequest $clientRequest)
    {
        // $data = request()->validate([
        //     'name'=> 'string',
        //     'surname'=> 'string',
        //     'birthday'=> 'string',
        //     'telephone'=> 'string',
        // ]);
        $client->update($clientRequest->all());
        return redirect()->route('admin.client.index', $client->id);
    }
}
