<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    
    #[On('refreshUsersTable')]
    public function render()
    {
        return view('livewire.admin.user.users-table',[
            "users" => User::orderBy('id', 'DESC')->paginate(7)
        ]);
    }
}
