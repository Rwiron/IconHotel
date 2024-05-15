<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yoeunes\Toastr\Facades\Toastr;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            // Retrieve the logged-in user
            $user = Auth::user();

            // Redirect users based on their role using named routes
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard'); // Redirect to the admin dashboard
                case 'staff':
                    return redirect()->route('staff.dashboard'); // Redirect to the staff dashboard
                case 'guest':
                    return redirect()->route('guest.dashboard'); // Redirect to the guest dashboard
                default:
                    return redirect()->route('dashboard'); // Redirect to a general dashboard
            }
        }

        // If authentication fails, show a Toastr error message
        Toastr::error('Invalid credentials, please try again.'); // Displaying Toastr notification for error

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the user's session.
        $request->session()->invalidate();

        // Regenerate the session token.
        $request->session()->regenerateToken();

        // Redirect to login page or wherever you like.
        return redirect('/loginPage');
    }
}