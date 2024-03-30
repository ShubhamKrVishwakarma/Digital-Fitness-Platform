<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index(){
        return view('trainers',[
            "trainers" => User::where("role","trainer")->get()
        ]);
    }

    // public function rate(Request $request){
    //     $request->validate([
    //         "trainer-rating"=> "required|integer"
    //     ]);
    //     Review::create([
    //         ""
    //     ])
    // }
}
