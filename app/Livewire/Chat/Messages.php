<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use App\Models\Message;
use Livewire\Attributes\On;
use Livewire\Component;

class Messages extends Component
{
    public $messages = [];
    public $message;
    public $chat_id;
    public $receiver_id;
    public $name;

    public function render()
    {
        return view('livewire.chat.messages');
    }

    #[On('messages')]
    public function loadMessages($id) {
        $this->chat_id = $id;
        $this->messages = Message::where("chat_id", $id)->get();
        
        $chat = Chat::findOrFail($id);

        if (auth()->user()->role === "trainer") {
            $this->receiver_id = $chat->user_id;
            $this->name = $chat->member->name;    
        }
        else{
            $this->receiver_id = $chat->trainer_id;
            $this->name = $chat->trainer->name;
        }
    }

    public function sendMessage(){
        Message::create([
            "chat_id" =>$this->chat_id, 
            "sender_id" => auth()->user()->id,
            "receiver_id" => $this->receiver_id,
            "message" => $this->message,
        ]);

        $this->reset("message");
    }
}
