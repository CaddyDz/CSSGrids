<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;
use Fresh\User;

class HomeController extends Controller
{
    public function index(Request $request, Post $posts)
    {
        $posts = $posts->orderBy('created_at', 'desc')->paginate($request->get('per-page', 10));
        return view('index')->withPosts($posts);
    }
}
