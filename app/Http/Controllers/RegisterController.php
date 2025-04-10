<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse{
        $validatedata=$request->validate([

            'name'=>'required|string|max:100',
            'email'=>'required|string|email|max:100|unique:users',
            'password'=>'required|string|min:8|confirmed',
        ]);
        //hash password
        $validatedata['password'] = Hash::make($validatedata['password']);

        $user=User::create( $validatedata);

        // return redirect()->route('pages.home');
        return redirect()->action([HomeController::class, 'index']);

    }
}
