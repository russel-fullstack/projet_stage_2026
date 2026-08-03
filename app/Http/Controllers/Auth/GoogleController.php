<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Laravel\Socialite\Socialite;
use Laravel\Socialite\Contracts\User as SocialiteUser;
use Illuminate\Support\Facades\DB;

class GoogleController extends Controller
{
    public function redirect(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

  public function callback(): RedirectResponse
    {
        try {
            /** @var SocialiteUser $googleUser */
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors([
                'error' => 'Échec de l\'authentification avec Google.',
            ]);
        }

        /** @var User|null $user */
        $user = User::where('google_id', $googleUser->getId())->first();

        if ($user instanceof User) {
            $user->update([
                'email' => $googleUser->getEmail() ?? '',
                'name' => $googleUser->getName() ?? 'Utilisateur Google',
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken ?? null,
                'avatar' => $googleUser->getAvatar() ?? null,
                'email_verified_at' => $user->email_verified_at ?? now(),
            ]);
        } else {
            /** @var User|null $user */
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user instanceof User) {
                $user->update([
                    'name' => $googleUser->getName() ?? $user->name,
                    'google_id' => $googleUser->getId(),
                    'google_token' => $googleUser->token,
                    'google_refresh_token' => $googleUser->refreshToken ?? null,
                    'email_verified_at' => $user->email_verified_at ?? now(),
                ]);
            } else {
                /** @var User $user */
                $user = DB::transaction(function () use ($googleUser) {
                     User::create([
                        'name' => $googleUser->getName() ?? 'Utilisateur Google',
                        'email' => $googleUser->getEmail() ?? '',
                        'password' => Hash::make(Str::random(32)),
                        'has_custom_password' => false,
                        'google_id' => $googleUser->getId(),
                        'google_token' => $googleUser->token,
                        'google_refresh_token' => $googleUser->refreshToken ?? null,
                        'email_verified_at' => now(),
                    ]);
                });

            }
        }

        Auth::login($user, true);

        return redirect()->intended(route('user-dashboard'));
    }
}
