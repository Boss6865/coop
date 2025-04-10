<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function index()
    {
        
       
        return view('pages.dhome');
    }

    public function authenticate(Request $request):RedirectResponse {
        $credentials=$request->validate([
            'email'=>'required|string|email|max:100',
            'password'=>'required|string',
        ]);
        //dd( $credentials);
       
        if(Auth::attempt($credentials)){
            $distname="";
            $request->session()->regenerate();
            $selectdist=User::where('email',$credentials['email'])->get();
            foreach($selectdist as $dist){
                $distname=$dist['name'];
            }
            $request->session()->put('District_name',$distname);
            return redirect()->action([LoginController::class, 'index']);
        }

        return back()->withErrors(['email'=> 'The provided Credentials do not match our records'])->onlyInput('email');
    }

    public function logout(Request $request):RedirectResponse {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->action([LoginController::class, 'login']);
    }

}
