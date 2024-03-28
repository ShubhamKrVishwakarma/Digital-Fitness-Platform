<?php

namespace App\Livewire\Admin\Workout;

use App\Models\Exercise;
use App\Models\Workout;
use App\Models\WorkoutPlan;
use Livewire\Component;

class AddWorkoutPlan extends Component
{
   
    public $name;
    public $level;
    public $duration;
    public $search;
    public $exerciseDetails = [];
    public $sets = [];
    public $reps = [];

    public function render()
    {
        return view('livewire.admin.workout.add-workout-plan', [
            "exercises" => Exercise::latest()->where('name', 'like', "%{$this->search}%")->get()
        ]);
    }

    public function addExercise($exerciseId) {
        $exercise = Exercise::findOrFail($exerciseId);
        $this->exerciseDetails[] = $exercise;
        $this->sets[$exercise->id] = null;
        $this->reps[$exercise->id] = null;
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
        $this->validate([
            "name" => "required|min:5|max:100",
            "level" => "required|in:begineer,intermediate,advanced",
            "sets.*" => "required",
            "reps.*" => "required",
            "duration" => "required"
        ]);

        $plan = WorkoutPlan::create([
            "name" => $this->name,
            "level" => $this->level,
            "duration" => $this->duration
        ]);

        $exercises = [];

        foreach ($this->exerciseDetails as $index => $exercise) {
            $exercises [] = [
                "plan_id" => $plan->id,
                "exercise_id" => $exercise->id,
                "sets" => $this->sets[$exercise->id],
                "reps" => $this->reps[$exercise->id]
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
