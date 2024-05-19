<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use App\Models\Subscription;
use Livewire\Attributes\On;
use Livewire\Component;

class Messages extends Component
{
    public $messages = [];

    public $message;
    
    public $chat_id;
    public $receiver_id;
    public $receiver_pic;
    public $name;

    public function render()
    {
        return view('livewire.chat.messages');
    }

    #[On('messages')]
    public function loadMessages($id) {
        $this->chat_id = $id;
        $this->messages = Message::where("chat_id", $id)->get();
        
        $chat = Subscription::findOrFail($id);

        $trainer = auth()->user()->role === "trainer" ? true : false;

        if ($trainer) {
            $this->receiver_id = $chat->user_id;
            $this->receiver_pic = $chat->member->getProfileUrl();
            $this->name = $chat->member->name;    
        }
        else{
            $this->receiver_id = $chat->trainer_id;
            $this->receiver_pic = $chat->trainer->getProfileUrl();
            $this->name = $chat->trainer->name;
        }
    }

    public function refreshMessage() {
        $this->messages = Message::where("chat_id", $this->chat_id)->get();
    }

    public function sendMessage() {
        Message::create([
            "chat_id" =>$this->chat_id, 
            "sender_id" => auth()->user()->id,
            "receiver_id" => $this->receiver_id,
            "message" => $this->message,
        ]);

        $this->messages = Message::where("chat_id", $this->chat_id)->get();

        $this->reset("message");
        $this->resetValidation();
    }

    public function deleteMessage($id)
    {   
        Message::findOrFail($id)->deleteOrFail();

        $this->dispatch(
            'alert',
            icon: 'success',
            title: 'Success!',
            text: 'Message Deleted Successfully!',
        );
    }
}
