<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Socialite;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Laravel\Socialite\Contracts\User as SocialiteUser;
use Illuminate\Support\Facades\DB;

class GithubController extends Controller
{
    public function redirect() : RedirectResponse
    {
        return Socialite::driver('github')
        ->redirect();
    }

     public function callback(): RedirectResponse
    {
        try {
            /** @var SocialiteUser $githubUser */
            $githubUser = Socialite::driver('github')->user();

        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors([
                'error' => 'Échec de l\'authentification avec Github.',
            ]);
        }

        /** @var User|null $user */
        $user = User::where('github_id', $githubUser->getId())->first();

        if ($user instanceof User) {
            $user->update([
                'email' => $githubUser->getEmail() ?? '',
                'name' => $githubUser->getName() ?? 'Utilisateur Github',
                'github_token' => $githubUser->token,
                'github_refresh_token' => $githubUser->refreshToken ?? null,
                'avatar' => $githubUser->getAvatar() ?? null,
                'email_verified_at' => $user->email_verified_at ?? now(),
            ]);
        } else {
            /** @var User|null $user */
            $user = User::where('email', $githubUser->getEmail())->first();

            if ($user instanceof User) {
                $user->update([
                    'name' => $githubUser->getName() ?? $user->name,
                    'github_id' => $githubUser->getId(),
                    'github_token' => $githubUser->token,
                    'github_refresh_token' => $githubUser->refreshToken ?? null,
                    'email_verified_at' => $user->email_verified_at ?? now(),
                ]);
            } else {
                /** @var User $user */
                $user = DB::transaction(function () use ($githubUser) {
                     User::create([
                        'name' => $githubUser->getName() ?? 'Utilisateur Github',
                        'email' => $githubUser->getEmail() ?? '',
                        'password' => Hash::make(Str::random(32)),
                        'has_custom_password' => false,
                        'github_id' => $githubUser->getId(),
                        'github_token' => $githubUser->token,
                        'github_refresh_token' => $githubUser->refreshToken ?? null,
                        'email_verified_at' => now(),
                    ]);
                });

            }
        }

        Auth::login($user, true);

        return redirect()->intended(route('user-dashboard'));
    }
}
