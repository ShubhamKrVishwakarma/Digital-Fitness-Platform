<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Review;
use App\Models\TrainerReview;
use Livewire\Attributes\On;
use Livewire\Component;

class ReviewsTable extends Component
{
    #[On('refreshReviewsTable')]
    public function render()
    {
        return view('livewire.admin.dashboard.reviews-table', [
            "reviews" => TrainerReview::orderBy('id', 'DESC')->get()
        ]);
    }
}
