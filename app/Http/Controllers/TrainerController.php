<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\ReviewType;
use App\Models\User;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index(){
        return view('trainers',[
            "trainers" => User::where("role","trainer")->get()
        ]);
    }

    public function rate(Request $request){
        $request->validate([
            "trainer-rating"=> "required"
        ]);
        $rating = Review::create([
            "user_id" => auth()->user()->id,
            "rating" => $request["trainer-rating"],
            "review" => $request["trainer-review"],
        ]);
        ReviewType::create([
            "review_id" => $rating->id,
            "type" => "trainer",
            "trainer_id" =>  $request["trainer-id"],
        ]);
        return redirect()->route("trainers");
    }
}
