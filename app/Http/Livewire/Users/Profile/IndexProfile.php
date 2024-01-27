<?php

namespace App\Http\Livewire\Users\Profile;

use App\Models\Master\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexProfile extends Component
{
    public $users_login;
    public function render()
    {
        return view('livewire.users.profile.index-profile');
    }

    public function mount()
    {
        $users_login = Auth::user();
        $this->users_login = User::where([
            'id' => $users_login->id
        ])->first();
    }
}
