<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.admin.user.users-table',[
            "users" => User::orderBy('created_at', 'DESC')->paginate(7)
        ]);
    }
}
