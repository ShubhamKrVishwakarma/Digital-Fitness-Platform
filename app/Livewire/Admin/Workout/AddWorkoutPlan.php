<?php

namespace App\Livewire\Admin\Workout;

use App\Models\Exercise;
use Livewire\Component;

class AddWorkoutPlan extends Component
{
    public $inputs = [];
    public $i = 0;

    public function render()
    {
        return view('livewire.admin.workout.add-workout-plan', [
            "exercises" => Exercise::all()
        ]);
    }

    public function addExercise($id) {
        $this->i = $this->i + 1;
        // $exercise = Exercise::findOrFail($id);
        array_push($this->inputs, $this->i);
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Exercise Added Successfully!',
        );
    }

    public function removeExercise() {
        dd($this->inputs);
        $this->i = $this->i - 1;
        array_push($this->inputs, $this->i);
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Exercise Removed Successfully!',
        );
    }
}
