<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Review;
use App\Models\TrainerReview;
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

    public $trainer_pic;
    public $trainer_name;
    public $trainer_email;
    public $trainer_posts;
    public $trainer_followers;
    public $trainer_followings;
    
    public function render()
    {
        return view('livewire.admin.dashboard.manage-review');
    }

    #[On('manage-review')]
    public function edit($id) {
        $this->id = $id;
        $review = TrainerReview::findOrFail($id);
        $this->pic = $review->user->getProfileUrl();
        $this->name = $review->user->name;
        $this->email = $review->user->email;
        $this->rating = $review->rating;
        $this->review = $review->review;

        $this->trainer_pic = $review->trainer->getProfileUrl();
        $this->trainer_name = $review->trainer->name;
        $this->trainer_email = $review->trainer->email;
        $this->trainer_posts = $review->trainer->posts->count();
        $this->trainer_followers = $review->trainer->followers;
        $this->trainer_followings = $review->trainer->following;
    }

    public function delete() {
        TrainerReview::findOrFail($this->id)->deleteOrFail();

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
