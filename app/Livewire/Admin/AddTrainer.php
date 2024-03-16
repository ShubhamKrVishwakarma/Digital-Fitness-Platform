<?php

namespace App\Livewire\Admin;

use Exception;
use App\Models\User;
use Livewire\Component;
use App\Models\TrainerDetail;
use Livewire\Attributes\Rule;
use Illuminate\Validation\ValidationException;

class AddTrainer extends Component
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
    
    #[Rule('required|min:2|max:100', as: 'Occupation')]
    public $occupation;

    #[Rule('required|max:100', as: 'Certificate ID')]
    public $certificate_id;

    #[Rule('required|date', as: 'Issue Date')]
    public $issue_date;
    
    #[Rule('required|date', as: 'Expiry Date')]
    public $expiry_date;

    #[Rule('required|max:100', as: 'Issued Authority')]
    public $issued_authority;

    #[Rule('required|min:8', as: 'Password')]
    public $password;
    
    #[Rule('required|min:8|same:password', as: 'Password Confirmation')]
    public $confirm_password;

    public function render()
    {
        return view('livewire.admin.add-trainer');
    }

    public function addTrainer() {
        try {
            $this->validate();

            $user = User::create([
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

            TrainerDetail::create([
                "user_id" => $user->id,
                "occupation" => $this->occupation, 
                "certificate_id" => $this->certificate_id, 
                "issue_date" => $this->issue_date, 
                "expiry_date" => $this->expiry_date, 
                "issued_authority" => $this->issued_authority
            ]);

            $this->reset();

            $this->dispatch('trainer-success');
        } catch(ValidationException) {
            return false;
        } catch(Exception) {
            $this->dispatch('error');
        }
    }
}
