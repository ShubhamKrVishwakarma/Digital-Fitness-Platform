<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use App\Models\Subscription;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Messages extends Component
{
    use WithFileUploads;

    public $messages = [];

    public $message;
    public $image;
    public $video;
    
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
            "content" => $this->message,
        ]);

        $this->messages = Message::where("chat_id", $this->chat_id)->get();

        $this->reset("message");
        $this->resetValidation();
    }

    public function sendImage() {
        $content = Message::create([
            "chat_id" =>$this->chat_id, 
            "sender_id" => auth()->user()->id,
            "receiver_id" => $this->receiver_id,
            "type" => "image",
        ]);

        $fileExtension = $this->image->getClientOriginalExtension();
        $fileName = $content->id . '.' . $fileExtension;
        $this->image->storeAs('public/messages', $fileName);

        $content->content = $fileName;

        $content->update();

        $this->messages = Message::where("chat_id", $this->chat_id)->get();

        // $this->image = null;
        
        $this->dispatch(
            'alert',
            icon: 'success',
            title: 'Success!',
            text: 'Image Shared!',
        );
    }

    public function sendVideo() {
        $content = Message::create([
            "chat_id" =>$this->chat_id, 
            "sender_id" => auth()->user()->id,
            "receiver_id" => $this->receiver_id,
            "type" => "video",
        ]);

        $fileExtension = $this->video->getClientOriginalExtension();
        $fileName = $content->id . '.' . $fileExtension;
        $this->video->storeAs('public/messages', $fileName);

        $content->content = $fileName;

        $content->update();

        $this->messages = Message::where("chat_id", $this->chat_id)->get();

        // $this->video = null;

        $this->dispatch(
            'alert',
            icon: 'success',
            title: 'Success!',
            text: 'Video Shared!',
        );
    }

    public function deleteMessage($id)
    {   
        Message::findOrFail($id)->deleteOrFail();

        $this->messages = Message::where("chat_id", $this->chat_id)->get();

        $this->dispatch(
            'alert',
            icon: 'success',
            title: 'Success!',
            text: 'Message Deleted Successfully!',
        );
    }
}
