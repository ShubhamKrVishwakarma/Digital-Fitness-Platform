<?php

namespace App\Livewire\Admin\Exercise;

use App\Models\Exercise;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ManageExercise extends Component
{
    use WithFileUploads;

    public $id;

    #[Rule('required|min:5|max:255')]
    public $name;
    #[Rule('required|min:3|max:50')]
    public $type;
    #[Rule('required|min:3|max:100')]
    public $equipment;
    
    public $image;
    
    #[Rule('nullable|sometimes|image')]
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

    public function update() {
        $this->validate();
        $exercise = Exercise::findOrFail($this->id);
        $exercise->name = $this->name;
        $exercise->type = $this->type;
        $exercise->equipment = $this->equipment;
        
        if ($this->new_image) {
            $this->new_image = $this->new_image->store('exercises', 'public');
            $exercise->image = $this->new_image;
            $this->new_image = null;
        }

        $exercise->update();

        $this->dispatch('refreshExerciseTable');
        
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Details Updated Successfully!',
        );
    }

    public function delete() {
        Exercise::findOrFail($this->id)->delete();
        $this->dispatch('refreshExerciseTable');
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Exercise Deleted Successfully!',
        );
    }
}
