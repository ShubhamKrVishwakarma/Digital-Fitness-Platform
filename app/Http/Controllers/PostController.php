<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Follower;
use App\Models\PostLike;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Community Page
     * @return view
     */
    public function index()
    {
        return view('community', [
            "trainers" => User::where('role', 'trainer')->take(5)->get(),
            "posts" => Post::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Single Post Page
     * @return view
     */
    public function singlePost($id)
    {
        return view('post', [
            "post" => Post::findOrFail($id)
        ]);
    }

    /**
     * Share Text/Message Post
     * @return redirect
     */
    public function share(Request $request)
    {
        $request->validate([
            "post-title" => "nullable|min:2|max:100",
            "post-message" => "required|min:3"
        ]);

        Post::create([
            "user_id" => auth()->user()->id,
            "title" => $request["post-title"],
            "content" => $request["post-message"]
        ]);

        return redirect()->route('community')->with('alert', 'Post Shared Successfully!');
    }

        /**
     * Share Image Post
     * @return redirect
     */
    public function shareImage(Request $request)
    {
        $request->validate([
            "post-title" => "nullable|min:2|max:100",
            "post-image" => "required|image"
        ]);

        $fileExtension = $request->file('post-image')->getClientOriginalExtension();
        $file_name = date('YmdHis') . '_post' . '.' . $fileExtension;
        $request->file('post-image')->storeAs('public/posts/', $file_name);

        Post::create([
            "user_id" => auth()->user()->id,
            "title" => $request["post-title"],
            "type" => "image",
            "content" => $file_name
        ]);

        return redirect()->route('community')->with('alert', 'Post Shared Successfully!');
    }

    /**
     * Share Video Post
     * @return redirect
     */
    public function shareVideo(Request $request)
    {
        $request->validate([
            "post-title" => "nullable|min:2|max:100",
            "post-video" => "required"
        ]);

        $fileExtension = $request->file('post-video')->getClientOriginalExtension();
        $file_name = date('YmdHis') . '_post' . '.' . $fileExtension;
        $request->file('post-video')->storeAs('public/posts/', $file_name);

        Post::create([
            "user_id" => auth()->user()->id,
            "title" => $request["post-title"],
            "type" => "video",
            "content" => $file_name
        ]);

        return redirect()->route('community')->with('alert', 'Post Shared Successfully!');
    }

    /**
     * Like Post
     * @return redirect
     */
    public function like($post_id)
    {
        if (Post::where("id", $post_id)->exists()) {
            if (!PostLike::where("post_id", $post_id)->where("user_id", auth()->user()->id)->exists()) {
                PostLike::create([
                    "post_id" => $post_id,
                    "user_id" => auth()->user()->id
                ]);
            }

            return back()->with('alert', 'Post Liked Successfully!');
        }
        
        return back()->with('alert', 'Something went wrong!');
    }

    /**
     * Remove Like from Post
     * @return redirect
     */
    public function unlike($post_id)
    {
        PostLike::where("post_id", $post_id)->where("user_id", auth()->user()->id)->delete();

        return back()->with('alert', 'Post Unliked Successfully!');
    }

    /**
     * Add Comment to a Post
     * @return redirect
     */
    public function comment(Request $request)
    {
        $request->validate([
            "post-comment" => "required|min:2|max:255"
        ]);

        if (Post::where("id", $request["post-id"])->exists()) {
            if (!Comment::where("post_id", $request["post-id"])->where("user_id", auth()->user()->id)->exists()) {
                Comment::create([
                    "post_id" => $request["post-id"],
                    "user_id" => auth()->user()->id,
                    "comment" => $request["post-comment"]
                ]);
            }
    
            return back()->with('alert', 'Comment Added Successfully!');
        }
        
        return back()->with('alert', 'Something went wrong!');
    }

    /**
     * Remove Comment from a Post
     * @return redirect
     */
    public function uncomment(Request $request)
    {
        $request->validate([
            "post-id" => "required"
        ]);

        Comment::where("post_id", $request["post-id"])->where("user_id", auth()->user()->id)->delete();

        return back()->with('alert', 'Comment Deleted Successfully!');
    }

    /**
     * Follow User
     * @return redirect
     */
    public function follow(Request $request)
    {
        if (auth()->user()->id === $request["user-id"]) {
            return back()->with('success', 'Cannot Follow Yourself!');
        }

        $request->validate([
            "user-id" => "required"
        ]);

        $follower = Follower::where("user_id", auth()->user()->id)->where("follower_id", $request["user-id"])->exists();

        if (!$follower) {
            Follower::create([
                "user_id" => auth()->user()->id,
                "follower_id" => $request["user-id"]
            ]);
            
            $user = User::findOrFail($request["user-id"]);
            $user->followers = $user->followers + 1;
            $user->update();

            $current_user = User::findOrFail(auth()->user()->id);
            $current_user->following = $current_user->following + 1;
            $current_user->update();
        }

        return back()->with('alert', 'Followed Successfully!');
    }

    /**
     * UnFollow User
     * @return redirect
     */
    public function unfollow(Request $request)
    {
        if (auth()->user()->id === $request["user-id"]) {
            return redirect()->route('community')->with('success', 'Cannot Unfollow Yourself!');
        }

        $request->validate([
            "user-id" => "required"
        ]);

        $follower = Follower::where("user_id", auth()->user()->id)->where("follower_id", $request["user-id"])->exists();

        if ($follower) {
            Follower::where("user_id", auth()->user()->id)->where("follower_id", $request["user-id"])->delete();
    
            $user = User::findOrFail($request["user-id"]);
            $user->followers = $user->followers - 1;
            $current_user = User::findOrFail(auth()->user()->id);
            $current_user->following = $current_user->following - 1;
            $current_user->update();
            $user->update();
        }

        return back()->with('alert', 'UnFollowed Successfully!');
    }

    /**
     * Delete Single Post
     * @return redirect
     */
    public function destroy($id)
    {
        if (Post::where("id", $id)->exists()) {
            Post::findOrFail($id)->deleteOrFail();
        }

        return back()->with('alert', 'Post Deleted Successfully!');
    }
}
