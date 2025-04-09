<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function authenticate(){
        return view('auth.login');
    }

}
