<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; // Add this for Auth facade
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function DocLogin(Request $request)
    {
        $valid = $this->rules($request->all());

        // Return validation result
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        }

        $email = $request->get('email');
        $password = $request->get('password');

        // Authenticate the doctor user
        if (Auth::attempt(['email' => $email, 'password' => $password, 'user_type' => 'doctor'])) {
            return redirect()->intended('/doctor/dashboard'); // Corrected `redirected()` to `redirect()`
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    // Return the validation result from this method
    public function rules($data)
    {
        $messages = [
            'email.required' => 'Please Enter Your Email Address',
            'email.email' => 'Please enter a valid email address',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters'
        ];

        // Use `exists` if you want to check if the email exists in the `users` table
        return Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], $messages);
    }

    public function savedoc(Request $request)
    {
        // Save the doctor user to the database
        $users = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')), // Hash the password
            'user_type' => 'doctor',
            'spl' => $request->get('spl')
        ]);

        $users->save();

        return redirect()->intended('/doctor/dashboard');
    }
}
