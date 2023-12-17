<?php

namespace App\Http\Controllers\Admin\ClientSubscription;

use App\Models\ClientSubscription;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;



class UpdateController extends Controller
{
    public function __invoke(ClientSubscription $clientSubscription, Request $request)
    {
        // $data = request()->validate([
        //     'name'=> 'string',
        //     'surname'=> 'string',
        //     'birthday'=> 'string',
        //     'telephone'=> 'string',
        // ]);
        
        // dd($request['status']);
        $clientSubscription->update($request->all());
        return redirect()->route('admin.clientsubscription.index');
    }
}
