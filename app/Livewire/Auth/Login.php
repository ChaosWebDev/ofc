<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password, $remember;

    protected $rules = [
        'email' => ['required', 'string'],
        'password' => ['required', 'string'],
        'remember' => ['nullable', 'boolean']
    ];

    public function login()
    {
        $this->validate();

        if (
            !Auth::attempt([
                'email' => $this->email,
                'password' => $this->password
            ], $this->remember)
        ) {
            $this->addError('password', 'Invalid credentials. Please try again.');
        }

        return redirect()->intended();
    }

    public function render()
    {
        return view('auth.login');
    }
}
