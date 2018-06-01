<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return 'Home';
    }
}
