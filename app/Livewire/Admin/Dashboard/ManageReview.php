<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Review;
use Livewire\Attributes\On;
use Livewire\Component;

class ManageReview extends Component
{
    public $id;
    public $pic;
    public $name;
    public $email;
    public $rating;
    public $review;
    
    public function render()
    {
        return view('livewire.admin.dashboard.manage-review');
    }

    #[On('manage-review')]
    public function edit($id) {
        $this->id = $id;
        $review = Review::findOrFail($id);
        $this->pic = $review->user->getProfileUrl();
        $this->name = $review->user->name;
        $this->email = $review->user->email;
        $this->rating = $review->rating;
        $this->review = $review->review;
    }

    public function delete() {
        Review::findOrFail($this->id)->deleteOrFail();

        $this->dispatch('refreshReviewsTable');

        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'Review Deleted',
        );
    }

    public function resetAll() {
        $this->reset();
    }
}
