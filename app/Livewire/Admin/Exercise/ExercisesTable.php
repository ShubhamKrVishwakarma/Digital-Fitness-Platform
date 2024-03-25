<?php

namespace App\Livewire\Admin\Exercise;

use App\Models\Exercise;
use Livewire\Component;
use Livewire\WithPagination;

class ExercisesTable extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.admin.exercise.exercises-table', [
            "exercises" => Exercise::orderBy('id', 'DESC')->paginate(7)
        ]);
    }
}
