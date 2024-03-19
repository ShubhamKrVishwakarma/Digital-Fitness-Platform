<?php

namespace App\Livewire\Auth;

use Exception;
use App\Models\User;
use Livewire\Component;
use App\Models\TrainerDetail;
use Livewire\Attributes\Rule;
use Illuminate\Validation\ValidationException;

class Trainer extends Component
{
    #[Rule('required|min:2|max:100', as: 'Username')]
    public $name;

    #[Rule('required|email|unique:users,email|min:5|max:100', as: 'Email')]
    public $email;

    #[Rule('required', as: 'Date of Birth')]
    public $dob;

    #[Rule('required|max:10', as: 'Phone Number')]
    public $phone;

    #[Rule('required|in:M,F,O', as: 'Gender')]
    public $gender;

    #[Rule('required|max:100', as: 'Occupation')]
    public $occupation;

    #[Rule('required|max:100', as: 'Certificate ID')]
    public $certificate_id;

    #[Rule('required', as: 'Issue Date')]
    public $issue_date;
    
    #[Rule('required', as: 'Expiry Date')]
    public $expiry_date;

    #[Rule('required|max:100', as: 'Issued Authority')]
    public $issued_authority;

    #[Rule('required|min:8', as: 'Password')]
    public $password;

    #[Rule('required|min:8|same:password', as: 'Password Confirmation')]
    public $confirm_password;

    public function render()
    {
        return view('livewire.auth.trainer');
    }

    public function store() {
        try {
            $this->validate();

            $user = User::create([
                "name" => $this->name,
                "email" => $this->email,
                "dob" => $this->dob,
                "phone" => $this->phone,
                "gender" => $this->gender,
                "password" => $this->password,
                "role" => "pending"
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

            $this->dispatch('success');
        } catch (ValidationException $e) {
            throw $e;
        } catch (Exception) {
            $this->dispatch('error');
        }
    }
}
