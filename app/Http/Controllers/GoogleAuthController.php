<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        // $user = Socialite::driver('google')->stateless()->user();

        // $finduser = User::where('google_id',$user->getId())->first();

        // if($finduser)
        // {
        //     Auth::login($finduser);
        //     return redirect('/dashboard');
        // }
        // else
        // {
        //     $newuser = User::create([
        //         'name' => $user->getName(),
        //         'email' => $user->getEmail(),
        //         'google_id' => $user->getId(),
        //         'role' => ''
        //     ]);
        //     Auth::login($newuser);
        //     return redirect('/dashboard');
        // }

        $user = Socialite::driver('google')->stateless()->user();
        
        
        $user = User::updateOrCreate([
            'google_id' => $user->id,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 0,
        ]);
    
        Auth::login($user);
    
        return redirect('/dashboard');
    }
}
