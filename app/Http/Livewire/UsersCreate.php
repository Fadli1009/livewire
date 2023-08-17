<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Livewire\Component;

class UsersCreate extends Component
{
    public $email;
    public $name;
    public $password;
    public function render()
    {
        return view('livewire.users-create');
    }
    public function store()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'

        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        session()->flash('success', 'User berhasil di buat');
    }
}