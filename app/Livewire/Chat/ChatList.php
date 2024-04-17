<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use App\Models\User;
use Livewire\Component;

class ChatList extends Component
{
    // Define public properties for the Livewire component
    public $trainer = false; // Indicates whether the user is a trainer
    public $search; // Holds the search query entered by the user

    public function render()
    {
        // Retrieve the authenticated user
        $user = User::findOrFail(auth()->user()->id);

        // Check if the user is a trainer
        if ($user->role === "trainer") {
            // If the user is a trainer, retrieve chat records where they are the trainer
            // Join the chats table with the users table to get the name associated with the user_id
            // Select all columns from chats table and name column from users table
            // Filter the results based on the search query
            $receivers = Chat::where("trainer_id", $user->id)
                ->join('users', 'chats.user_id', '=', 'users.id')
                ->select('chats.*', 'users.name')
                ->where("name", "like", "%{$this->search}%")
                ->get();

            $this->trainer = true; // Set the trainer property to true
        } else {
            // If the user is not a trainer, retrieve chat records where they are the user
            // Join the chats table with the users table to get the name associated with the trainer_id
            // Select all columns from chats table and name column from users table
            // Filter the results based on the search query
            $receivers = Chat::where("user_id", $user->id)
                ->join('users', 'chats.trainer_id', '=', 'users.id')
                ->select('chats.*', 'users.name')
                ->where("name", "like", "%{$this->search}%")
                ->get();
            
            $this->trainer = false; // Set the trainer property to false
        }
        return view('livewire.chat.chat-list', [
            "users" => $receivers
        ]);
    }
}
