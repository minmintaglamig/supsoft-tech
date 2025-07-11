<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LinkedInController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function callback()
{
    $linkedinUser = Socialite::driver('linkedin')->stateless()->user();

    $user = User::firstOrCreate(
        ['email' => $linkedinUser->getEmail()],
        [
            'name' => $linkedinUser->getName(),
            'email_verified_at' => now(),
            'password' => bcrypt(uniqid())
        ]
    );

    Auth::login($user, true);
    return redirect()->route('dashboard');
}

}
