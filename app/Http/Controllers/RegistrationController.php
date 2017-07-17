<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use blog\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
      return view('registrations.create');
    }

    public function store(RegistrationForm $request)
    {
      $request->persist();
      return redirect()->home();
    }
}
