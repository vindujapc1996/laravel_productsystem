<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function user_registration()
    {
        return view('user_registration');
    }
    public function register(Request $request)
    {
      $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'place'=>'required',
            'contact'=>'max:10',
            'password'=>'required',
            'type'=>'required',
        ]);
        $data = $request->all();
            $data["password"]=bcrypt($data["password"]);
            User::create($data); 
            
            return redirect()->route('user_registration')->with('success','registerd');
    }
    public function customer_registration()
    {
        return view('customer_registration');
    }
    public function custom_reg(Request $request)
    {
      $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'place'=>'required',
            'contact'=>'max:10',
            'password'=>'required',
            'type'=>'required',
        ]);
        $data = $request->all();
            $data["password"]=bcrypt($data["password"]);
            User::create($data); 
            
            return redirect()->route('customer_registration')->with('success','registered');
    }

}
