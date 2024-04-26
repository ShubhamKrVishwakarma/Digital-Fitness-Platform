<?php

namespace App\Livewire\Chat;

use App\Models\Subscription;
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
            $receivers = Subscription::where("trainer_id", $user->id)
                ->join('users', 'subscriptions.user_id', '=', 'users.id')
                ->select('subscriptions.*', 'users.name')
                ->where("name", "like", "%{$this->search}%")
                ->get();

            $this->trainer = true;
        } else {
            $receivers = Subscription::where("user_id", $user->id)
                ->join('users', 'subscriptions.trainer_id', '=', 'users.id')
                ->select('subscriptions.*', 'users.name')
                ->where("name", "like", "%{$this->search}%")
                ->get();
            
            $this->trainer = false;
        }
        return view('livewire.chat.chat-list', [
            "users" => $receivers
        ]);
    }
}
