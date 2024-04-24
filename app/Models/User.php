<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'phone', 'password', 'gender', 'dob', 'address', 'city', 'state', 'zip_code', 'bio', 'profile_pic', 'role', 'rating', 'followers', 'following'];

    protected $casts = ['password' => 'hashed'];

    public function trainerDetails() {
        return $this->hasOne(TrainerDetail::class, 'user_id');
    }

    public function cart() {
        return $this->hasMany(Cart::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function subscriptions() {
        return $this->hasMany(Subscription::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function followers() {
        return $this->hasMany(Follower::class);
    }

    public function userWorkoutLogs() {
        return $this->hasMany(UserWorkoutLog::class);
    }

    public function follows($id) {
        $follower = Follower::where("follower_id", $id)->where('user_id', auth()->user()->id)->get();
        if ($follower->count() < 1) {
            return false;
        }
        return true;
    }

    public function hasBeenReviewed($trainer_id) {
        return TrainerReview::where("user_id", auth()->user()->id)->where("trainer_id", $trainer_id)->exists();
    }

    public function hasProductReview($product_id) {
        return ProductReview::where("user_id", auth()->user()->id)->where("product_id", $product_id)->exists();
    }

    public function hasSubscription() {
        if ($this->role === "trainer") {
            return Subscription::where("trainer_id", $this->id)->exists();
        } 
        return Subscription::where("user_id", $this->id)->exists();
    }

    public function hasSubscribed($trainer_id) {
        return Subscription::where("user_id", $this->id)->where("trainer_id", $trainer_id)->exists();
    }

    public function canShare() {
        if ($this->role === "trainer" || $this->role === "admin") {
            return true;
        }
        return Subscription::where("user_id", auth()->user()->id)->exists();
    }
    public function hasPost($id) {
        $user = User::findOrFail($id);

        if ($user->role === "trainer" || $user->role === "admin") {
            return true;
        }
        return Subscription::where("user_id", $id)->exists();
    }

    public function getProfileUrl() {
        if ($this->profile_pic) {
            return url('storage/users/' . $this->profile_pic);
        }
        return asset('./images/profile/profile.jpg');
    }
}
