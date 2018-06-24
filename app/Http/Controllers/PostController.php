<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return response()->json($post->get());
    }
}
