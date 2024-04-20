<?php

namespace App\Livewire\Admin\Query;

use App\Models\Query;
use Livewire\Attributes\On;
use Livewire\Component;

class ManageQuery extends Component
{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $message;
    public $reply;

    public function render()
    {
        return view('livewire.admin.query.manage-query');
    }

    #[On('manage-query')]
    public function edit($id) {
        $query = Query::findOrFail($id);
        $this->id = $query->id;
        $this->name = $query->name;
        $this->email = $query->email;
        $this->phone = $query->phone;
        $this->message = $query->message;
    }

    public function delete() {
        Query::findOrFail($this->id)->deleteOrFail();

        $this->dispatch('refreshQueryTable');

        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Query Deleted Successfully!',
        );
    }

    public function resetAll() {
        $this->reset();
    }
}
