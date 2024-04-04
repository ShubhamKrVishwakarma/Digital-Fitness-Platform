<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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

    public function uncomment(Request $request) {
        $request->validate([
            "post-id" => "required"
        ]);

        Comment::where("post_id", $request["post-id"])->where("user_id", auth()->user()->id)->delete();

        return redirect()->route('community')->with('success', 'Comment Deleted Successfully!');
    }

    public function shareImage(Request $request) {
        $request->validate([
            "post-title" => "required|min:2|max:255",
            "post-image" => "required|image" 
        ]);

        $fileExtension = $request->file('post-image')->getClientOriginalExtension();
        $file_name = date('YmdHis') . '_post' . '.' .$fileExtension;
        $request->file('post-image')->storeAs('public/posts/', $file_name);
        $request["post-image"] = $file_name;

        Post::create([
            "user_id" => auth()->user()->id,
            "title" => $request["post-title"],
            "type" => "image",
            "content" => $request["post-image"]
        ]);

        return redirect()->route('community')->with('success', 'Post Shared Successfully!');
    }

    public function shareVideo(Request $request) {
        $request->validate([
            "post-title" => "required|min:2|max:255",
            "post-video" => "required" 
        ]);

        $fileExtension = $request->file('post-video')->getClientOriginalExtension();
        $file_name = date('YmdHis') . '_post' . '.' .$fileExtension;
        $request->file('post-video')->storeAs('public/posts/', $file_name);
        $request["post-video"] = $file_name;

        Post::create([
            "user_id" => auth()->user()->id,
            "title" => $request["post-title"],
            "type" => "video",
            "content" => $request["post-video"]
        ]);

        return redirect()->route('community')->with('success', 'Post Shared Successfully!');
    }
}
