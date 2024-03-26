<?php

namespace App\Livewire\Admin\Workout;

use App\Models\Exercise;
use App\Models\Workout;
use App\Models\WorkoutPlan;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AddWorkoutPlan extends Component
{
    #[Rule('required|min:5|max:100')]
    public $name;
    #[Rule('required|in:begineer,intermediate,advanced')]
    public $level;
    public $search;
    public $exerciseDetails = [];

    public function render()
    {
        return view('livewire.admin.workout.add-workout-plan', [
            "exercises" => Exercise::latest()->where('name', 'like', "%{$this->search}%")->get()
        ]);
    }

    public function addExercise($exerciseId) {
        $exercise = Exercise::findOrFail($exerciseId);
        $this->exerciseDetails[] = $exercise;
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Exercise Added Successfully!',
        );
    }

    public function removeExercise($index) {
        unset($this->exerciseDetails[$index]);
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Exercise Removed Successfully!',
        );
    }

    public function addWorkoutPlan() {
        $this->validate();

        $plan = WorkoutPlan::create([
            "name" => $this->name,
            "level" => $this->level
        ]);

        $exercises = [];

        foreach ($this->exerciseDetails as $index => $exercise) {
            $exercises [] = [
                "plan_id" => $plan->id,
                "exercise_id" => $exercise->id,
                "sets" => 10,
                "reps" => 2
            ];
        }

        Workout::insert($exercises);

        $this->reset();

        $this->dispatch('refreshWorkoutPlansTable');

        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Workout Plan Added Successfully!',
        );
    }
}
