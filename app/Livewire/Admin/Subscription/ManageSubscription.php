<?php

namespace App\Livewire\Admin\Subscription;

use App\Models\Subscription;
use Livewire\Attributes\On;
use Livewire\Component;

class ManageSubscription extends Component
{
    public $id;
    public $user_pic;
    public $user_name;
    public $user_email;

    public $trainer_pic;
    public $trainer_name;
    public $trainer_email;

    public $type;
    public $expiry_date;

    public function render()
    {
        return view('livewire.admin.subscription.manage-subscription');
    }

    #[On('manage-subscription')]
    public function edit($id)
    {
        $this->id = $id;
        $subscription = Subscription::findOrFail($id);
        $this->user_pic = $subscription->member->getProfileUrl();
        $this->user_name = $subscription->member->name;
        $this->user_email = $subscription->member->email;

        $this->trainer_pic = $subscription->trainer->getProfileUrl();
        $this->trainer_name = $subscription->trainer->name;
        $this->trainer_email = $subscription->trainer->email;

        $this->type = $subscription->type;
        $this->expiry_date = $subscription->expiry_date;
    }

    public function delete(Subscription $subscription) {
        $subscription->deleteOrFail();
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Conversation Deleted Successfully!',
        );
    }

    public function resetAll() {
        $this->reset();
        $this->resetValidation();
    }
}
