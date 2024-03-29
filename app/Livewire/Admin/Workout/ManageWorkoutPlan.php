<?php

namespace App\Livewire\Admin\Workout;

use App\Models\Exercise;
use App\Models\Workout;
use App\Models\WorkoutPlan;
use Livewire\Attributes\On;
use Livewire\Component;

class ManageWorkoutPlan extends Component
{
    public $id;
    public $name;
    public $level;
    public $duration;
    public $calories;

    public $sets = [];
    public $reps = [];

    public $search;

    public $exerciseDetails = [];

    public function render()
    {
        return view('livewire.admin.workout.manage-workout-plan', [
            "exercises" => Exercise::latest()->where('name', 'like', "%{$this->search}%")->get()
        ]);
    }

    #[On('manage-workout-plan')]
    public function edit($id) {
        $plan = WorkoutPlan::findOrFail($id);
        $this->id = $plan->id;
        $this->name = $plan->name;
        $this->level = $plan->level;
        $this->duration = $plan->duration;
        $this->calories = $plan->calories;

        $workouts = Workout::where("plan_id", $id)->get();
        
        foreach($workouts as $workout) {
            $exercise = Exercise::findOrFail($workout->exercise_id);
            $this->exerciseDetails[] = $exercise;
            $this->sets[$exercise->id] = $workout->sets;
            $this->reps[$exercise->id] = $workout->reps;
        }
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

    public function update() {
        $this->validate([
            "name" => "required|min:5|max:100",
            "level" => "required|in:begineer,intermediate,advanced",
            "duration" => "required|integer",
            "calories" => "required|integer",
            "sets.*" => "required|integer",
            "reps.*" => "required|integer",
        ]);

        $plan = WorkoutPlan::findOrFail($this->id);
        $plan->name = $this->name;
        $plan->level = $this->level;
        $plan->duration = $this->duration;
        $plan->calories = $this->calories;

        $plan->update();

        $this->dispatch('refreshWorkoutPlansTable');

        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Details Updated Successfully!',
        );
    }

    public function delete() {
        WorkoutPlan::findOrFail($this->id)->deleteOrFail();

        $this->dispatch('refreshWorkoutPlansTable');

        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Plan Removed Successfully!',
        );
    }
}
