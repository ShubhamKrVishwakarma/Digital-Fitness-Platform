<?php

namespace App\Livewire\Admin\Community;

use App\Models\Comment;
use App\Models\Post;
use App\Models\PostLike;
use Livewire\Component;

class CommunityInfo extends Component
{
    public function render()
    {
        return view('livewire.admin.community.community-info', [
            "total_posts" => Post::count(),
            "total_likes" => PostLike::count(),
            "total_comments" => Comment::count()
        ]);
    }
}
