<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index() {
        return view('community', [
            "trainers" => User::where('role', 'trainer')->inRandomOrder()->take(5)->get(),
            "posts" => Community::all()
        ]);
    }

    public function like(Request $request) {
        try {
            $post = Community::findOrFail($request->post_id);
            $post->likes = $post->likes + 1;
            $post->update();
            return response()->json(['message' => 'Account created successfully']);
        } catch(Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }
}
