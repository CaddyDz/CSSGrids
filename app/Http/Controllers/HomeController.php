<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;
use Fresh\User;

class HomeController extends Controller
{
    public function index(Request $request, Post $post)
    {
        return view('index');
    }
}
