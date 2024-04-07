<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

        return view('home',['trainers'=> User::where('role','trainer')->orderBy('rating','DESC')->take(3)->get()]);
    }
}
