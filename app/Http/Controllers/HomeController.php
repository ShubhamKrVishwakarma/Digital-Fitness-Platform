<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    /**
     * Home Page
     * @return view
     */
    public function index()
    {
        return view('home', [
            'trainers' => User::where('role', 'trainer')->orderBy('rating', 'DESC')->take(3)->get()
        ]);
    }
}
