<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;

class MailingController extends Controller
{
    public function create(Request $request)
    {
      dd($request->email);
    }
}
