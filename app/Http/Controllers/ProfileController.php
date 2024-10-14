<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        // Ensure the user is authenticated
        $user = Auth::user();
        
        // Redirect to login if not authenticated
        if (!$user) {
            return Redirect::route('login')->with('error', 'You need to login first.');
        }

        return view('user-pfp.profile', [
            'user' => $user,  // Pass the authenticated user
        ]);
    }      

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();

        // Check if user is authenticated
        if (!$user) {
            return Redirect::route('login')->with('error', 'You need to login first.');
        }

        $user->fill($request->validated());

        // Check if the email is being changed
        if ($request->has('email') && $user->isDirty('email')) {
            $user->email_verified_at = null; // Mark email as unverified if changed
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'Profile updated successfully!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Validate the password to confirm the user
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        // Check if user is authenticated
        if (!$user) {
            return Redirect::route('login')->with('error', 'You need to login first.');
        }

        Auth::logout(); // Log out the user

        $user->delete(); // Delete the user account

        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate CSRF token

        return Redirect::to('/')->with('status', 'Your account has been deleted successfully.');
    }
}
