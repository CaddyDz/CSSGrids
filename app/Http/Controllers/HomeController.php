<?php

namespace Fresh\Http\Controllers;

use Illuminate\Mail\Mailer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $mailer;
        
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
        
    public function index(Mailer $mail)
    {
        $name = 'Salim';
                
        $this->mailer->send('emails.auth.welcome', ['name' => $name], function ($m) {
            $m->to('salim@caddydz.me', 'Salim')->subject('You have registered.');
        });
    }
}
