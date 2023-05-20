<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\Master\Account;
use App\Models\Master\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Str;


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

        $uuid = Str::uuid();

        $user = User::create([
            'uuid'     => $uuid,
            'email'     => $this->email,
        ]);

        $account = Account::create([
            'uuid'     => $uuid,
            'email' => $this->email,
            'username' => $this->username,
            'password'  => Hash::make($this->password),
            'level'     => 1,
            'role'      => 'user',
            'id_user' => $user->id
        ]);
        return redirect(RouteServiceProvider::HOME);
    }
}
