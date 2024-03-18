<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AddMember extends Component
{
    #[Rule('required|min:2|max:100', as: 'Name')]
    public $name;

    #[Rule('required|email|unique:users,email|min:5|max:100', as: 'Email')]
    public $email;

    #[Rule('required|in:M,F,O', as: 'Gender')]
    public $gender;

    #[Rule('required', as: 'Date of Birth')]
    public $dob;
    
    #[Rule('nullable|max:10', as: 'Phone Number')]
    public $phone;

    #[Rule('nullable', as: 'Address')]
    public $address;

    #[Rule('nullable|min:2|max:100', as: 'City')]
    public $city;
    
    #[Rule('nullable|max:10', as: 'Zip Code')]
    public $zip_code;

    #[Rule('nullable|max:100', as: 'State')]
    public $state;

    #[Rule('nullable|max:255', as: 'Bio')]
    public $bio;

    #[Rule('nullable', as: 'Profile Picture')]
    public $profile_pic;

    #[Rule('required|min:8', as: 'Password')]
    public $password;
    
    #[Rule('required|min:8|same:password', as: 'Password Confirmation')]
    public $confirm_password;

    public function render()
    {
        return view('livewire.admin.user.add-member');
    }

    public function addMember() {
        $this->validate();

        User::create([
            "name" => $this->name,
            "email" => $this->email,
            "gender" => $this->gender,
            "dob" => $this->dob,
            "phone" => $this->phone,
            "address" => $this->address,
            "city" => $this->city,
            "zip_code" => $this->zip_code,
            "state" => $this->state,
            "bio" => $this->bio,
            "password" => $this->password
        ]);

        $this->reset();

        $this->dispatch('member-success');
    }
}
