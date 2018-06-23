<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\User;

class HomeController extends Controller
{
    public function index(User $user)
    {
        $user = $user->where('username', 'billy')->first();

        dd($user->getFirstNameOrUsername());
    }
}
