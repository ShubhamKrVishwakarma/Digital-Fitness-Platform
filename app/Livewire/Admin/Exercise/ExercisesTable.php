<?php

namespace App\Livewire\Admin\Exercise;

use App\Models\Exercise;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ExercisesTable extends Component
{
    use WithPagination;
    
    #[On('refreshExerciseTable')]
    public function render()
    {
        return view('livewire.admin.exercise.exercises-table', [
            "exercises" => Exercise::orderBy('id', 'DESC')->paginate(2)
        ]);
    }
}
