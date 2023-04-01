<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Models\account\pengguna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class Daftar extends Component
{

    public $username, $email, $password;

    public function render()
    {
        return view('livewire.auth.daftar');
    }

    public function validationsForm()
    {
        $this->validate([
            'username' => 'required|alpha',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        $this->submit();
    }

    public function submit()
    {
        $pengguna = pengguna::create([
            'email' => $this->email,
        ]);

        $user = User::create([
            'username'  => $this->username,
            'email'     => $this->email,
            'password'  => Hash::make($this->password),
            'level'     => 'user',
            'id_pengguna'   => $pengguna->id,
            'join_date'   => date('Y-m-d H:i:s')
        ]);

        event(new Registered($user));

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
