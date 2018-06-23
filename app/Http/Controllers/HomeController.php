<?php

namespace Fresh\Http\Controllers;

use Illuminate\Http\Request;
use Fresh\User;

class HomeController extends Controller
{
    public function index(User $user)
    {
        $users = $user->active()->reputationGreaterThan(100)->get();
        dd($users);
        return view('index');
    }
}
