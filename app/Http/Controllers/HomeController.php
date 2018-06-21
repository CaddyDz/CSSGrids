<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;

class HomeController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->take(10)->get();
        return view('index')->with('posts', $posts);
    }
}
