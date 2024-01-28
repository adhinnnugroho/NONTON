<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('User.ProfileUser');
    }

    public function edit()
    {
        return view('User.profile.edit-profile-setting');
    }
}
