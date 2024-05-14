<?php

namespace App\Livewire\Admin\Community;

use Livewire\Component;

class Post extends Component
{
    public function render()
    {
        return view('livewire.admin.community.post', [
            "posts" => Post::all()
        ]);
    }
}
