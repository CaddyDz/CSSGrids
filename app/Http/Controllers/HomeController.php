<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
		public function index()
		{
			return response()->json([
				'posts' => [
					['id' => 1, 'title' => 'abc'],
					['id' => 2, 'title' => 'def'],
					['id' => 3, 'title' => 'ghi']
				]
			]);
		}
}
