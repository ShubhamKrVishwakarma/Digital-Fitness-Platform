<?php

namespace App\Livewire\Admin\Community;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public function render()
    {
        return view('livewire.admin.community.posts', [
            "posts" => Post::all()
        ]);
    }

    public function deletePost($id) {
        Post::findOrFail($id)->deleteOrFail();
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Post Deleted Sucessfully!',
        );
    }

    public function deleteSingleComment($post_id, $user_id) {
        Comment::where("post_id", $post_id)->where("user_id", $user_id)->delete();
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Comment Deleted Sucessfully!',
        );
    }

    public function deleteAllComments($id) {
        Comment::where("post_id", $id)->delete();
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'All Comments Deleted Sucessfully!',
        );
    }
}
