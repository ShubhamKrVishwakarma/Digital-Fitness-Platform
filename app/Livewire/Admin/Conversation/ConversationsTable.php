<?php

namespace App\Livewire\Admin\Conversation;

use App\Models\Chat;
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
}
