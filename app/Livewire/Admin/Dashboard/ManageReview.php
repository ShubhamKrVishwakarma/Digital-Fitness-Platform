<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\ProductReview;
use App\Models\TrainerReview;
use Livewire\Attributes\On;
use Livewire\Component;

class ManageReview extends Component
{
    public $type;

    public $id;
    public $reviewer_pic;
    public $reviewer_name;
    public $reviewer_email;
    public $reviewer_rating;
    public $reviewer_review;

    public $pic;
    public $name;

    public $trainer_email;
    public $trainer_posts;
    public $trainer_followers;
    public $trainer_followings;

    public $product_category;
    
    public function render()
    {
        return view('livewire.admin.dashboard.manage-review');
    }

    #[On('manage-review')]
    public function edit($id, $type) {
        $this->id = $id;
        $this->type = $type;

        if ($type === "trainer") {
            $review = TrainerReview::findOrFail($id);
            $this->reviewer_pic = $review->user->getProfileUrl();
            $this->reviewer_name = $review->user->name;
            $this->reviewer_email = $review->user->email;
            $this->reviewer_rating = $review->rating;
            $this->reviewer_review = $review->review;

            $this->pic = $review->trainer->getProfileUrl();
            $this->name = $review->trainer->name;
            $this->trainer_email = $review->trainer->email;
            $this->trainer_posts = $review->trainer->posts->count();
            $this->trainer_followers = $review->trainer->followers;
            $this->trainer_followings = $review->trainer->following;
        } else if ($type === "product") {
            $review = ProductReview::findOrFail($id);
            $this->reviewer_pic = $review->user->getProfileUrl();
            $this->reviewer_name = $review->user->name;
            $this->reviewer_email = $review->user->email;
            $this->reviewer_rating = $review->rating;
            $this->reviewer_review = $review->review;

            $this->pic = $review->product->getProductUrl();
            $this->name = $review->product->name;
            $this->product_category = $review->product->category->name;
        }
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
