<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('User.ProfileUser');
    }

    public function edit()
    {

        $data = [
            'title' => 'Edit Profile Setting',
            'userLogin' => Auth::user(),
            'breadcrumbs' => [
                'Home' => route("dashboard"),
                'Profile Setting' => route("profile-setting.index"),
                'Edit Profile' => null,
            ]
        ];
        return view('User.profile.edit-profile-setting', $data);
    }
}
