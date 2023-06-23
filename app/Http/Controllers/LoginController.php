<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;



class LoginController
{

 
    public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                Session::put('user_name', $user->name); // Store the user's name in session
                
                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                throw ValidationException::withMessages(['message' => 'Invalid credentials']);
                return redirect('/login');
            }
        }
    public function logout(Request $request)
        {
            Auth::logout(); // Perform the logout
            $request->session()->invalidate(); // Invalidate the session
            $request->session()->regenerateToken(); // Regenerate the CSRF token
        
            return redirect('/login'); // Redirect the user to the login page
        }

     
    
}
