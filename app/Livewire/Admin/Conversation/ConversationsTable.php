<?php

namespace App\Livewire\Admin\Conversation;

use App\Models\Chat;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ConversationsTable extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.admin.conversation.conversations-table', [
            "conversations" => Chat::orderBy('id', 'DESC')->paginate(5)
        ]);
    }

    public function delete(Chat $chat) {
        $chat->deleteOrFail();
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Conversation Deleted Successfully!',
        );
    }
}
