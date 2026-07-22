<?php

namespace App\Http\Responses;

use Illuminate\Http\RedirectResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Symfony\Component\HttpFoundation\Response;

class LoginResponse implements LoginResponseContract
{
    public function toResponse( $request): Response|RedirectResponse
    {
        $user = auth()->user();

        return match ($user->role) {
            'admin' => redirect()->route('dashboard'),

            'user' => redirect()->route('user-dashboard'),

            default => redirect()->route('accueil'),
        };
    }
}
