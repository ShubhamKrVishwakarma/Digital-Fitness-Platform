<?php

namespace App\Livewire\Admin\Exercise;

use App\Models\Exercise;
use Livewire\Attributes\On;
use Livewire\Component;

class ManageExercise extends Component
{
    public $id;
    public $name;
    public $type;
    public $equipment;
    public $image;
    public $new_image;

    public function render()
    {
        return view('livewire.admin.exercise.manage-exercise');
    }

    #[On('manage-exercise')]
    public function edit($id) {
        $exercise = Exercise::findOrFail($id);
        $this->id = $id;
        $this->name = $exercise->name;
        $this->image = $exercise->image;
        $this->type = $exercise->type;
        $this->equipment = $exercise->equipment;
    }
}
