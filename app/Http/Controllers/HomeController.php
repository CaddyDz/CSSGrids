<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return '<form action="' . route('home') . '" method="post"><input type="text" name="email"><input type="submit"></form>';
    }

    public function create(Request $request)
    {
        dd($request->email);
    }
}
