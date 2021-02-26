<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');

    }
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request-> email,
            'password'=> $request-> password
        ];
    
        if (Auth::attempt($credentials)){
            return redirect()->route('dashboard.index');
        }
        return redirect()->route('login.index')->with('msg_error', "Autenticação Falhou.");
    }
    public function logout()
    {
        Auth::logout();
        
        return redirect()->route('login.index');

    }
}
