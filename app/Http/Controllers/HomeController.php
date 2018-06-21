<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;

class HomeController extends Controller
{
    public function index(Request $request, Post $post)
    {
        $postToUpdate = $post->findOrFail($request->id);
        dd($postToUpdate);

        return view('index');
    }
}
