<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
		public function index()
		{
			return view('index');
		}

		public function second()
		{
			// validate
			// insert the post
			return redirect()->back();
		}
}
