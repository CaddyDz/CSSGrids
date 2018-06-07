<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;

class MailingController extends Controller
{
    public function create(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email'
      ], [
        'email.required' => 'We need your :attribute.'
      ]);
      dd($request->email);
    }
}
