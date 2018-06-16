<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\Http\Requests\Newsletter\CreateSubscriptionFormRequest;

class HomeController extends Controller
{
		public function index()
		{
				return view('index');
		}

		public function create(CreateSubscriptionFormRequest $request)
		{
			dd('Create subscription');
		}
}
