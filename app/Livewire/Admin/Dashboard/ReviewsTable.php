<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Review;
use Livewire\Attributes\On;
use Livewire\Component;

class ReviewsTable extends Component
{
    #[On('refreshReviewsTable')]
    public function render()
    {
        return view('livewire.admin.dashboard.reviews-table', [
            "reviews" => Review::orderBy('id', 'DESC')->get()
        ]);
    }
}
