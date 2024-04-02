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
    
    public function share(Request $request) {
        $request->validate([
            "post-message" => "required|min:3"
        ]);

        Post::create([
            "user_id" => auth()->user()->id,
            "title" => "Test Title",
            "content" => $request["post-message"]
        ]);

        return redirect()->route('community')->with('success', 'Post Added Successfully!');
    }

    public function like(Request $request) {
       
    }
}
