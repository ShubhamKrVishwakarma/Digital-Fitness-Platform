<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;

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

    public function getProfileUrl() {
        if ($this->profile_pic) {
            return url('storage/user/' . $this->profile_pic);
        }
        return asset('./images/profile/profile.jpg');
    }
}
