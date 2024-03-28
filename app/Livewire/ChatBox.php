<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatBox extends Component
{
    public $messages = [];

    public function render()
    {
        return view('livewire.chat-box');
    }
    
    #[On("chatt")]
    public function chatbox_listen($id){
        // $this->messages = Message::all();
        $this->messages = Message::where("chat_id",$id)->get();
    }
}
