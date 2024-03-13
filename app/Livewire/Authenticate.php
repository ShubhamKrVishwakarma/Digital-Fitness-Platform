<?php

namespace App\Livewire;

use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Authenticate extends Component
{
    #[Rule('required|email|min:5|max:100', as: 'Email')]
    public $email;

    #[Rule('required|min:8', as: 'Password')]
    public $password;
    
    public function render()
    {
        return view('livewire.authenticate');
    }

    public function authenticate() {
        try {
            $this->validate();

            $credentials = [
                'email' => $this->email,
                'password' => $this->password,
            ];

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                if ($user->role == "pending") {
                    Auth::logout();
                    $this->dispatch('pending');
                } else {
                    $this->dispatch('success');
                }
            } else {
                $this->dispatch('invalid');
            }

            $this->reset();
        } catch(Exception) {
            $this->dispatch('error');
        }
    }
}
