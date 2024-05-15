<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yoeunes\Toastr\Facades\Toastr;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255'],
            'lastname' => ['nullable', 'string', 'max:255'], // 'nullable' allows the field to be optional
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'terms' => ['accepted'],
        ]);

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }

        // Proceed to create the user
        $user = User::create([
            'username' => $request->username,
            'lastname' => $request->lastname, // Including lastname in user creation
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'guest', // Default role
        ]);

        // Optional: Log the user in immediately after registration
        auth()->login($user);

        // Optional: Notify user of successful registration
        Toastr::success('Registration successful. Welcome to our community!', 'Success');

        return redirect()->route('loginPage'); // Redirect to a specified route after registration
    }
}