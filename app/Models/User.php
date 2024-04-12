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
        $this->hasOne(TrainerDetail::class, 'user_id');
    }

    public function cart() {
        return $this->hasMany(Cart::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function chats() {
        return $this->hasMany(Chat::class);
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

    public function getProfileUrl() {
        if ($this->profile_pic) {
            return url('storage/users/' . $this->profile_pic);
        }
        return asset('./images/profile/profile.jpg');
    }
}
