<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;

class HomeController extends Controller
{
    public function index(Request $request, Post $post)
    {
        $postToUpdate = $post->Where('id', '=', $request->id)->first();

        $postToUpdate->title = 'This is an updated title';
        $postToUpdate->update();
        echo $postToUpdate->title;
        $postToUpdate->delete();
        dd('Done!');
        return view('index');
    }
}
