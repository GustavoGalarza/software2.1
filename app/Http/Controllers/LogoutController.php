<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LogoutController extends Controller
{
    public function logout(){
        Session::flush();

        Auth::logout();
        Session::forget('github');
        Session::forget('google');
        return redirect()->to('/login'); 
    }
    
}
