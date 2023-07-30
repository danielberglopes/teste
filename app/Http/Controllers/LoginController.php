<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){
       return redirect()->route('browser');
        }else{
            return view('login');
        }
    }

    public function browser(){
        return view('index');
    }

  
}
