<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\TrainerDetail;
use Illuminate\Support\Facades\Date;

class AddTrainer extends Component
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
    public $occupation;
    public $certificate_id;
    public $issue_date;
    public $expiry_date;
    public $issued_authority;
    public $password;
    public $confirm_password;

    /**
     * Render the Component
     * @return view
     */
    public function render()
    {
        return view('livewire.admin.user.add-trainer');
    }

    /**
     * Add New Member
     * Dispatch Events
     */
    public function addTrainer() {
        $this->validate([
            "name" => "required|min:2|max:100",
            "email" => "required|email|unique:users,email|min:5|max:100",
            "gender" => "required|in:M,F,O",
            "dob" => "required|date|before_or_equal:" . Date::now()->subYears(18)->format('d-m-Y'),
            "phone" => "nullable|numeric|digits:10",
            "address" => "nullable",
            "city" => "nullable|min:2|max:100",
            "zip_code" => "nullable|min:6|max:12",
            "state" => "nullable|min:2|max:100",
            "bio" => "nullable|min:5|max:255",
            "profile_pic" => "nullable|sometimes|image",
            "occupation" => "required|min:2|max:100",
            "certificate_id" => "required|min:5|max:50",
            "issue_date" => "required|date",
            "expiry_date" => "nullable|date|after:issue_date",
            "issued_authority" => "required|min:2|max:200",
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
        $user->role = "pending";
        $user->rating = 0;
        $user->password = $this->password;

        $user->save();

        if ($this->profile_pic) {
            $fileExtension = $this->profile_pic->getClientOriginalExtension();
            $fileName = $user->id . '.' . $fileExtension;
            $this->profile_pic->storeAs('public/users', $fileName);
            $user->profile_pic = $fileName;
        }

        $user->save();

        TrainerDetail::create([
            "user_id" => $user->id,
            "occupation" => $this->occupation, 
            "certificate_id" => $this->certificate_id, 
            "issue_date" => $this->issue_date, 
            "expiry_date" => $this->expiry_date, 
            "issued_authority" => $this->issued_authority
        ]);

        $this->reset();

        $this->dispatch('refreshUsersTable');
        
        $this->dispatch(
            'alert', 
            icon: 'info',
            title: 'Success!',
            text: 'Trainer Added Successfully. But Not Verified!',
        );
    }
}
