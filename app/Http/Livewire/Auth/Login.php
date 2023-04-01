<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Login extends Component
{
    use LivewireAlert;


    public $email, $password;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function validationsForm()
    {
        $this->validate([
            'email'    => 'required|email',
            'password' => 'required|min:8'
        ]);

        $this->submit();
    }

    public function submit()
    {

        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }


        return
            $this->alert('error', 'email dan password yang kamu masukan salah nih', [
                'position' => 'center',
                'timer' => 3000,
            ]);;
    }
}
