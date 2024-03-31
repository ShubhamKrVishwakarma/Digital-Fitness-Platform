<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('community', [
            "trainers" => User::where('role', 'trainer')->inRandomOrder()->take(5)->get(),
            "posts" => Post::all()
        ]);
    }

    public function like(Request $request) {
        try {
            $post = Post::findOrFail($request->post_id);
            $post->likes = $post->likes + 1;
            $post->update();
            return response()->json(['message' => 'Account created successfully']);
        } catch(Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }
}
