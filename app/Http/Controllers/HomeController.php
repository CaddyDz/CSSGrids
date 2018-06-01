<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($username)
    {
        return view('home.index')->withUsername($username)->with([
          'fullName' => 'Salim Djerbouh'
        ]);
    }
}
