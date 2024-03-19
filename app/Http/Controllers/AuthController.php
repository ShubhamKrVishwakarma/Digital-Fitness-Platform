<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function signup()
    {
        return view('Auth.signup');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function logout() {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
}
