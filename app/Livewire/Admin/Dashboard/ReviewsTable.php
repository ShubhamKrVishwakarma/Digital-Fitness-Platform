<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\TrainerReview;
use App\Models\ProductReview;

class ReviewsTable extends Component
{
    use WithPagination;
    
    public $type = "trainer";

    #[On('refreshReviewsTable')]
    public function render()
    {
        if ($this->type === "trainer") {
            $reviews = TrainerReview::orderBy('id', 'DESC')->paginate(7);
        } else if ($this->type === "product") {
            $reviews = ProductReview::orderBy('id', 'DESC')->paginate(7);
        }

        return view('livewire.admin.dashboard.reviews-table', [
            "reviews" => $reviews
        ]);
    }
}
