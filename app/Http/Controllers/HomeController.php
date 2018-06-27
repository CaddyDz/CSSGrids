<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Post;

class HomeController extends Controller
{
    public function index(Post $post)
    {
        $array = [
            ['title' => 'Abc'],
            ['title' => 'Abc']
        ];

        $posts = collect($array);
        dd($posts->last());
        return view('home.index');
    }
}
