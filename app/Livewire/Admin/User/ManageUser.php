<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ManageUser extends Component
{
    #[Rule('required|min:2|max:100', as: 'Name')]
    public $name;

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

    #[Rule('nullable|min:8', as: 'Password')]
    public $password;
    
    #[Rule('nullable|min:8|same:password', as: 'Password Confirmation')]
    public $confirm_password;

    public $id;
    public $email;
    public $role;

    public function render()
    {
        return view('livewire.admin.user.manage-user');
    }

    public function mount($id) {
        $user = User::find($id);
        $this->id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->gender = $user->gender;
        $this->dob = $user->dob;
        $this->phone = $user->phone;
        $this->address = $user->address;
        $this->city = $user->city;
        $this->zip_code = $user->zip_code;
        $this->state = $user->state;
        $this->bio = $user->bio;
        $this->profile_pic = $user->profile_pic;
        $this->role = $user->role;
    }

    public function update()
    {
        $this->validate();

        $user = User::find($this->id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->gender = $this->gender;
        $user->dob = $this->dob;
        $user->phone = $this->phone;
        $user->address = $this->address;
        $user->city = $this->city;
        $user->zip_code = $this->zip_code;
        $user->state = $this->state;
        $user->bio = $this->bio;
        $user->profile_pic = $this->profile_pic;

        if (!empty($this->password)) {
            $user->password = $this->password;
        }

        $user->update();

        $this->dispatch('update-success');
    }
}
