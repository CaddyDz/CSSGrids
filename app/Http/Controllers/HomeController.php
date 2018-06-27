<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;

class HomeController extends Controller
{
    public function index(Post $post)
    {
        return view('home.index');
    }
}
