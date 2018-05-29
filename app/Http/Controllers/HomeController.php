<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        echo $request->name . '<br>';
        echo $request['name'] . '<br>';
        echo request('name') . '<br>';
        echo $request->get('name') . '<br>';
        echo $request->get('name', null) . '<br>';
        echo $request->get('name', 'no name provided') . '<br>';
        die();
    }
}
