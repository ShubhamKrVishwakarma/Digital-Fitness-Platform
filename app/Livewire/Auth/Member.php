<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Exception;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Member extends Component
{
    #[Rule('required|min:2|max:100', as: 'Name')]
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
        return view('livewire.auth.member');
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
        } catch (ValidationException $e) {
            throw $e;
        } catch (Exception) {
            $this->dispatch('error');
        }
    }
}
