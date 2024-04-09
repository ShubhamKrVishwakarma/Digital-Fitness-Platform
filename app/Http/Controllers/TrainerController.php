<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TrainerReview;
use App\Models\User;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index(){
        return view('trainers',[
            "trainers" => User::where("role","trainer")->get()
        ]);
    }

    public function reviewTrainer(Request $request){
        $request->validate([
            "trainer-rating" => "required",
            "trainer-review" => "required|min:2|max:255"
        ]);

        TrainerReview::create([
            "user_id" => auth()->user()->id,
            "rating" => $request["trainer-rating"],
            "review" => $request["trainer-review"],
            "trainer_id" =>  $request["trainer-id"]
        ]);
        
        $total_no_of_reviews = TrainerReview::where("trainer_id" , $request['trainer-id'])->count();

        $trainer = User::findOrFail($request["trainer-id"]);

        $trainer->rating = ($trainer->rating +  $request["trainer-rating"])/$total_no_of_reviews;

        $trainer->update();

        return redirect()->route("trainers");
    }
}
