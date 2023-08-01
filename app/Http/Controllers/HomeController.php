<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function admin_home_index()
    {
        return view('admin_home_index');
    }
    public function user_home()
    {
        return view('user_home');
    }
    public function customer_home()
    {
        return view('customer_home');
    }
    public function index2()
    {
        return view('index2');
    }
    public function index3()
    {
        return view('index3');
    }
}
