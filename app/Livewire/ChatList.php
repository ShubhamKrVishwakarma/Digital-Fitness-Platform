<?php

namespace App\Livewire;

use App\Models\Chat;
use App\Models\User;
use Livewire\Component;

class ChatList extends Component
{
    public $trainer = false;

    public function render()
    {
        $user = User::find(auth()->user()->id );
        // dd($user->role);
        if ($user->role==="trainer") {
            $receivers = Chat::where("trainer_id",$user->id)->get();
            $this->trainer = true;
        }
        else{
            $receivers = Chat::where("user_id",$user->id)->get();
            $this->trainer = false;

        }
        
        return view('livewire.chat-list', [
            "Users" => $receivers
        ]);
    }
}
