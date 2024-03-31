<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Exception;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('community', [
            "trainers" => User::where('role', 'trainer')->inRandomOrder()->take(5)->get(),
            "posts" => Post::with('comments')->orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function like(Request $request) {
        try {
            $post = Post::findOrFail($request->post_id);
            $post->likes = $post->likes + 1;
            $post->update();
            return response()->json(['message' => 'Post Liked']);
        } catch(Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }
    
    public function share(Request $request) {
        try {
            Post::create([
                "user_id" => auth()->user()->id,
                "title" => "Demo",
                "content" => $request->message
            ]);
            return response()->json(['message' => 'Post Shared successfully!']);
        } catch(Exception) {
            return response()->json(['error' => 'Server Error'], 500);
        }
    }
}
