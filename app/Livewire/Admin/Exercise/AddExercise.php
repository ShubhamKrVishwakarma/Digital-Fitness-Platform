<?php

namespace App\Livewire\Admin\Exercise;

use App\Models\Exercise;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddExercise extends Component
{
    use WithFileUploads;

    #[Rule('required|min:5|max:255')]
    public $name;
    #[Rule('required|min:3|max:50')]
    public $type;
    #[Rule('required|min:3|max:100')]
    public $equipment;
    #[Rule('required|image')]
    public $image;

    public function render()
    {
        return view('livewire.admin.exercise.add-exercise');
    }

    public function store() {
        $this->validate();

        $this->image = $this->image->store('exercises', 'public');

        Exercise::create([
            "name" => $this->name,
            "type" => $this->type,
            "equipment" => $this->equipment,
            "image" => $this->image
        ]);

        $this->reset();

        $this->dispatch("refreshExerciseTable");
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'A New Exercise Added Successfully!',
        );
    }
}
