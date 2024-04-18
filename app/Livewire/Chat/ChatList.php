<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use App\Models\User;
use Livewire\Component;

class ChatList extends Component
{
    public $trainer = false;
    public $search;

    public function render()
    {
        $user = User::findOrFail(auth()->user()->id);

        if ($user->role === "trainer") {
            $receivers = Chat::where("trainer_id", $user->id)
                ->join('users', 'chats.user_id', '=', 'users.id')
                ->select('chats.*', 'users.name')
                ->where("name", "like", "%{$this->search}%")
                ->get();

            $this->trainer = true;
        } else {
            $receivers = Chat::where("user_id", $user->id)
                ->join('users', 'chats.trainer_id', '=', 'users.id')
                ->select('chats.*', 'users.name')
                ->where("name", "like", "%{$this->search}%")
                ->get();
            
            $this->trainer = false;
        }
        return view('livewire.chat.chat-list', [
            "users" => $receivers
        ]);
    }
}
