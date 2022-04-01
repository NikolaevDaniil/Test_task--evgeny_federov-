<?php

namespace App\Http\Controllers;


class PageController extends Controller
{

    public function index($id)
    {
        return view('welcome', compact('id'));
    }
}
