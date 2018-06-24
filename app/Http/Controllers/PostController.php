<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;

class PostController extends Controller
{
    public function get(Post $post)
    {
        dd($post);
    }
}
