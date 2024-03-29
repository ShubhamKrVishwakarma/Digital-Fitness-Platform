<?php

namespace App\Livewire\Admin\Query;

use App\Models\Query;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class QueriesTable extends Component
{
    use WithPagination;

    #[On('refreshQueryTable')]
    public function render()
    {
        return view('livewire.admin.query.queries-table', [
            "queries" => Query::orderBy('id', 'DESC')->paginate(6)
        ]);
    }
}