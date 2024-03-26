<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ChatList extends Component
{
    public function render()
    {
        
        return view('livewire.chat-list', [
            "Users" => User::all()
        ]);
    }

    public function message()
    {

    }
}
