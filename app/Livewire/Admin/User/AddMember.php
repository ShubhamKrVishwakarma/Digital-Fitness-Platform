<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Date;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddMember extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $gender;
    public $dob;
    public $phone;
    public $address;
    public $city;
    public $zip_code;
    public $state;
    public $bio;
    public $profile_pic;
    public $password;
    public $confirm_password;

    /**
     * Render the Component
     * @return view
     */
    public function render()
    {
        return view('livewire.admin.user.add-member');
    }

    /**
     * Add New Member
     * Dispatch Events
     */
    public function create() {
        $this->validate([
            "name" => "required|min:2|max:100",
            "email" => "required|email|unique:users,email|min:5|max:100",
            "gender" => "required|in:M,F,O",
            "dob" => "required|date|before_or_equal:" . Date::now()->subYears(15)->format('d-m-Y'),
            "phone" => "nullable|numeric|digits:10",
            "address" => "nullable",
            "city" => "nullable|min:2|max:100",
            "zip_code" => "nullable|min:6|max:12",
            "state" => "nullable|min:2|max:100",
            "bio" => "nullable|min:5|max:255",
            "profile_pic" => "nullable|sometimes|image",
            "password" => "required|min:8|max:20",
            "confirm_password" => "required|min:8|max:20|same:password"
        ]);

        $user = new User();
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
        $user->password = $this->password;

        $user->save();

        if ($this->profile_pic) {
            $fileExtension = $this->profile_pic->getClientOriginalExtension();
            $fileName = $user->id . '.' . $fileExtension;
            $this->profile_pic->storeAs('public/users', $fileName);
            $user->profile_pic = $fileName;
        }

        $user->save();

        $this->reset();

        $this->dispatch('refreshUsersTable');
        
        $this->dispatch(
            'alert', 
            icon: 'success',
            title: 'Success!',
            text: 'A New Member Added Successfully!',
        );
    }
}
