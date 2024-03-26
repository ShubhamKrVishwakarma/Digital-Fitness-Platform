<?php

namespace App\Livewire\Admin\Workout;

use App\Models\WorkoutPlan;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class WorkoutPlanTable extends Component
{
    use WithPagination;

    #[On('refreshWorkoutPlansTable')]
    public function render()
    {
        return view('livewire.admin.workout.workout-plan-table', [
            "plans" => WorkoutPlan::latest()->paginate(7)
        ]);
    }
}
