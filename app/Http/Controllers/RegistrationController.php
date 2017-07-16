<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use blog\Mail\Welcome;

use blog\User;

class RegistrationController extends Controller
{
    public function create()
    {
      return view('registrations.create');
    }

    public function store()
    {
      // Validate the data

      $this->validate(request(), [
        'name' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
      ]);

      // create a user
      $user = User::create(['name' => request('name'), 'email' => request('email'), 'password' => bcrypt(request('password'))]);

      // Login

      auth()->login($user);

      // Redirect to the home page

      \Mail::to($user)->send(new Welcome($user));

      return redirect()->home();
    }
}
