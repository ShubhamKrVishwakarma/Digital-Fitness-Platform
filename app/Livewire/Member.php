<?php

namespace App\Livewire;

use Exception;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Member extends Component
{
    #[Rule('required|min:2|max:100', as: 'Username')]
    public $name;

    #[Rule('required|email|unique:users,email|min:5|max:100', as: 'Email')]
    public $email;

    #[Rule('required|in:M,F,O', as: 'Gender')]
    public $gender;

    #[Rule('required', as: 'Date of Birth')]
    public $dob;

    #[Rule('required|min:8', as: 'Password')]
    public $password;

    #[Rule('required|min:8|same:password', as: 'Password Confirmation')]
    public $confirm_password;

    public function render()
    {
        return view('livewire.member');
    }

    public function create() {
        try {
            $this->validate();

            User::create([
                "name" => $this->name,
                "email" => $this->email,
                "gender" => $this->gender,
                "dob" => $this->dob,
                "password" => $this->password
            ]);

            $this->reset();

            $this->dispatch('success');
        } catch (Exception) {
            $this->dispatch('error');
        }
    }
}
