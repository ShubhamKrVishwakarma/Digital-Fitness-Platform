<?php

namespace App\Livewire\Auth;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
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
        return view('livewire.auth.authenticate');
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
                    auth()->logout();

                    request()->session()->invalidate();
                    request()->session()->regenerateToken();
                    $this->dispatch('pending');
                } else {
                    $this->dispatch('success');
                }

                $this->reset();
            } else {
                $this->dispatch('invalid');
            }
        } catch (ValidationException $e) {
            throw $e;
        } catch(Exception $e) {
            $this->dispatch('error');
        }
    }
}
