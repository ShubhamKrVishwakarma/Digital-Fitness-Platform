<?php

namespace App\Livewire\Admin\Community;

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
}
