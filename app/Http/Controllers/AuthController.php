<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show login page
    public function showLogin()
    {
        return view('custom-auth.login');
    }

    // Show sign-up page
    public function showSignUp()
    {
        return view('custom-auth.signup');
    }

    // Handle user registration
    public function register(Request $request)
    {
        // Validate request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            // Create user
            User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('custom-auth.login')->with('success', 'Registration successful. Please login.');
        } catch (\Exception $e) {
            return back()->withErrors(['registration' => 'There was an error during registration.']);
        }
    }

    // Handle user login (including admin check)
    public function login(Request $request)
    {
        // Validate request
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Check if it's the admin credentials
        if ($request->email === 'pawsitive@gmail.com' && $request->password === 'Admin@123') {
            Auth::loginUsingId(1); // Assuming Admin has ID 1, adjust if necessary
            return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
        }

        // Attempt login for regular users
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('main.index'); // Adjust the route name if needed
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email'); // Preserve the email input
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('custom-auth.login')->with('success', 'Logged out successfully.');
    }
}
