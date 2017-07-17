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

    public function store(RegistrationForm $form)
    {
      $form->persist();
      session()->flash('message', 'Thanks for signing up');
      return redirect()->home();
    }
}
