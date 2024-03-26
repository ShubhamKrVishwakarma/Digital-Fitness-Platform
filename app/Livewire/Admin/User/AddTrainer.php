<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Models\TrainerDetail;

class AddTrainer extends Component
{
    use WithFileUploads;

    #[Rule('required|min:2|max:100', as: 'Name')]
    public $name;

    #[Rule('required|email|unique:users,email|min:5|max:100', as: 'Email')]
    public $email;

    #[Rule('required|in:M,F,O', as: 'Gender')]
    public $gender;

    #[Rule('required|date', as: 'Date of Birth')]
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
    
    #[Rule('required|min:2|max:100', as: 'Occupation')]
    public $occupation;

    #[Rule('required|max:100', as: 'Certificate ID')]
    public $certificate_id;

    #[Rule('required|date', as: 'Issue Date')]
    public $issue_date;
    
    #[Rule('required|date|after:issue_date', as: 'Expiry Date')]
    public $expiry_date;

    #[Rule('required|max:100', as: 'Issued Authority')]
    public $issued_authority;

    #[Rule('required|min:8', as: 'Password')]
    public $password;
    
    #[Rule('required|min:8|same:password', as: 'Password Confirmation')]
    public $confirm_password;

    public function render()
    {
        return view('livewire.admin.user.add-trainer');
    }

    
    public function addTrainer() {
        $this->validate();
        
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
        $user->password = $this->password;

        $user->save();

        if ($this->profile_pic) {
            $fileExtension = $this->profile_pic->getClientOriginalExtension();
            $fileName = $user->id . '.' . $fileExtension;
            $this->profile_pic->storeAs('public/user', $fileName);
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