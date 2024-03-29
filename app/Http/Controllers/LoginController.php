<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('auth.index');
    }

    public function login_proses(Request $request){
        $data = $request->validate([
            'email' => 'required', 
            'password' => 'required'
        ]);
    
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
    
        return back()->withErrors([
            'message' => 'Email atau password salah'
        ]);
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('succes', 'kamu berhasil logout');
    }
}