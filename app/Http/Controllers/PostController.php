<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Exception;
use App\Models\Post;
use App\Models\PostLike;
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

    public function like($post_id) {
        PostLike::create([
            "post_id" => $post_id,
            "user_id" => auth()->user()->id
        ]);

        return redirect()->route('community')->with('success', 'Post Liked Successfully!');
    }

    public function unlike($post_id) {
        PostLike::where("post_id", $post_id)->where("user_id", auth()->user()->id)->delete();
        return redirect()->route('community')->with('success', 'Post Unliked Successfully!');
    }
    
    public function comment(Request $request) {
        $request->validate([
            "post-comment" => "required|min:2|max:255"
        ]);
        
        Comment::create([
            "post_id" => $request["post-id"],
            "user_id" => auth()->user()->id,
            "comment" => $request["post-comment"]
        ]);
        
        return redirect()->route('community')->with('success', 'Comment Added Successfully!');
    }
}
