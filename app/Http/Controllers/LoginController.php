<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function admin_login()
    {
        return view('admin_login');
    }
    public function log(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('admin_home_index');
        }
        
        return back()->withErrors([
            'email'=>'the provided credentials do not match our records.'
        ]);
    }
    public function user_login()
    {
        return view('user_login');
    }
    public function user_log(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('user_home');
        }
        return back()->withErrors([
            'email'=>'the provided credentials do not match our records.'
        ]);
   
    }
    public function customer_login()
    {
        return view('customer_login');
    }
    public function cust_log(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('customer_home');
        }
        return back()->withErrors([
            'email'=>'the provided credentials do not match our records.'
        ]);
   
    }


}
