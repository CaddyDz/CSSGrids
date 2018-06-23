<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;

class HomeController extends Controller
{
    public function index(Request $request, Post $post)
    {
        $p = $post->orderBy('created_at', 'asc')->limit(5)->get();
        dd($p);
        return view('index');
    }
}
