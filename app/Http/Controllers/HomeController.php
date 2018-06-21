<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;

class HomeController extends Controller
{
    public function index(Request $request, Post $post)
    {
        $newPost = new Post;
        $newPost->title = 'A new title';
        $newPost->body = 'A new body';
        $newPost->save();
        dd('Done!');
    }
}
