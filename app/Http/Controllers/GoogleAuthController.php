<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        $finduser = User::where('google_id',$user->getId())->first();

        if($finduser)
        {
            Auth::login($finduser);
            return redirect('/dashboard');
        }
        else
        {
            $newuser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'password' => bcrypt('1234242'),
                'role' => ''
            ]);
            Auth::login($newuser);
            return redirect('/dashboard');
        }
    }
}
