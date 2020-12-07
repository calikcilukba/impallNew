<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class ControllerAuth extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postlogin(request $request)
    {
        if(Auth::attempt($request->only('email','password')))
        {
            if(Auth::user()->role != 1)
            {

                return redirect('home');
            }else
            {
                return redirect('dashboard');
            }
        }
        return view('auth.login');
    }
}
