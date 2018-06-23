<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;

class HomeController extends Controller
{
    public function index(Request $request, Post $posts)
    {
        $post = $posts->find($request->id);
        return view('index')->with('post', $post);
    }
}
