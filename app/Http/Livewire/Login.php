<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public string $username;
    public string $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function login() {
        
    }
}
