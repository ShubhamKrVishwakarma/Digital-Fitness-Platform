<?php

namespace App\Livewire\Admin\Subscription;

use App\Models\User;
use Livewire\Component;

class AddSubscription extends Component
{
    public $type;

    public function render()
    {
        return view('livewire.admin.subscription.add-subscription', [
            "users" => User::where("role", "member")->get(),
            "trainers" => User::where("role", "trainer")->get()
        ]);
    }
}
