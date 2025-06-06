<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminloginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('pages.home');
    }

    public function login(){
        return view('auth.admin');
    }
     public function authenticate(Request $request):RedirectResponse {
        $credentials=$request->validate([
            'email'=>'required|string|max:100',
            'password'=>'required|string',
        ]);
        // dd( $credentials);
       
        if(Auth::attempt($credentials)){
            
            $request->session()->regenerate();
           
            return redirect()->action([HomeController::class, 'index']);
        }

        return back()->withErrors(['email'=> 'The provided Credentials do not match our records'])->onlyInput('email');
    }

     public function logout(Request $request):RedirectResponse {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->action([AdminloginController::class, 'login']);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
