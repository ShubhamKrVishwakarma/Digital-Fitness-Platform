<?php

namespace App\Livewire\Admin\Subscription;

use App\Models\Subscription;
use App\Models\User;
use Livewire\Component;

class AddSubscription extends Component
{
    public $user_id;
    public $trainer_id;
    public $type;

    public function render()
    {
        return view('livewire.admin.subscription.add-subscription', [
            "users" => User::where("role", "member")->get(),
            "trainers" => User::where("role", "trainer")->get()
        ]);
    }

    public function addSubscription()
    {
        $this->validate([
            "user_id" => "required|numeric",
            "trainer_id" => "required|numeric",
            "type" => "required|in:monthly,yearly"
        ]);

        Subscription::create([
            "user_id" => $this->user_id,
            "trainer_id" => $this->trainer_id,
            "type" => $this->type,
            "expiry_date" => ($this->type === "monthly") ? now()->addMonth() : now()->addYear()
        ]);

        $this->reset();

        $this->dispatch("refreshSubscriptionTable");

        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Subscription Added Successfully!',
        );
    }
}
