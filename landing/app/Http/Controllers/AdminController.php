<?php

namespace App\Http\Controllers;


use App\Services\JsonRpcClient;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function index(Request $request)
    {
        $client = new JsonRpcClient();
        $visits = $client->send('visit@get',[
            'page' => $request->page ?? 1,
            'perPage' => $request->perPage ?? 5
        ]);
        return view('admin',  ['visits' => $visits['result']]);

    }
}
