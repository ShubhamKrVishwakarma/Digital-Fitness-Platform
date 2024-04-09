<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Review;
use App\Models\TrainerReview;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ReviewsTable extends Component
{
    use WithPagination;
    
    #[On('refreshReviewsTable')]
    public function render()
    {
        return view('livewire.admin.dashboard.reviews-table', [
            "reviews" => TrainerReview::orderBy('id', 'DESC')->paginate(7)
        ]);
    }
}
