<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
  public function customLogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    // Check if user exists and password is correct
    if ($user && $request->password === $user->password) { // direct comparison without hashing
        // Login successful, set session
        Auth::login($user);

        // Prepare a success message
        $successMessage = "Welcome back, " . $user->name . "! You have been successfully logged in.";

        // Redirect to the intended page with a success message
        return redirect()->intended('admin')->with('success', $successMessage);
    }

    // Prepare an error message
    $errorMessage = "Login failed. Please check your credentials and try again.";

    // Login failed, redirect back with an error message
    return back()->withErrors([
        'login_error' => $errorMessage,
    ])->withInput($request->only('email'));
}

public function logout(Request $request)
{
    // Log the user out
    Auth::logout();

    // Invalidate the user's session.
    $request->session()->invalidate();

    // Generate a new session token for security purposes
    $request->session()->regenerateToken();

    // Redirect to the login page or wherever you want with a success message
    return redirect()->route('login')->with('success', 'You have been successfully logged out.');
}

}
