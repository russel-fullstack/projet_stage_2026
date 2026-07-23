<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{

    public function edit(Request $request)
    {
        $user= $request->user();
        if ($user->role === 'admin') {

            return view('profile.admin.edit', [
                'user' => $user,
            ]);

        }

        if ($user->role === 'user') {

            return view('profile.user.edit', [
                'user' => $user,
            ]);

        }

        abort(403);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);

        $user->update($validated);

        return back()->with('success', 'Profil mis à jour avec succès.');
    }
    public function updatePassword(Request $request)
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }

    public function destroy(Request $request)
    {
        $validated = $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        auth()->logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('accueil');
    }
    public function security(Request $request)
    {
        $user= $request->user();

        if ($user->role === 'admin') {
            return view('profile.admin.security', compact('user'));
        }

        if ($user->role === 'user') {
            return view('profile.user.security', compact('user'));
        }

        abort(403);
    }
}
