<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Master\Account;
use App\Models\Master\User;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;


class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function Handlecallback(){
        $user = Socialite::driver('google')->user();
        $findUser = ModelsUser::where(['google_id' => $user->getId()])->first();
        if($findUser){
            Auth::login($findUser);
            return redirect()->intended('dashboard');
        }else{
            $uuid = Str::uuid();
            $email = $user->getEmail();
            $avatar = $user->getAvatar();
            $username = $this->generateUniqueUsername($email);
            $password = Hash::make($email);
            $google_id = $user->getId();

            $usermaster = User::create([
                'uuid'     => $uuid,
                'email'     => $email,
                'foto'      => $avatar
            ]);

            $accountNew = Account::create([
                'uuid'     => $uuid,
                'google_id' => $google_id,
                'email' => $email,
                'username' => $username,
                'password'  => $password,
                'level'     => 1,
                'id_user' => $usermaster->id,
                'foto'      => $avatar
            ]);

            $account = ModelsUser::where(['id' => $accountNew->id])->first();
            Auth::login($account);
            return redirect()->intended('dashboard');
        }
    }

    private function generateUniqueUsername($email)
    {
        $username = Str::before($email, '@'); // Menghapus karakter setelah "@" dalam email
        $username = Str::replace('gmail.com', '', $username); // Menghapus kata "gmail.com" dalam username
        $username = Str::slug($username); // Mengubah username menjadi slug

        $isUnique = false;
        $counter = 1;
        $originalUsername = $username;

        while (!$isUnique) {
            $existingUsername = Account::where('username', $username)->first();

            if (!$existingUsername) {
                $isUnique = true;
            } else {
                $username = $originalUsername . $counter;
                $counter++;
            }
        }

        return $username;
    }
}
