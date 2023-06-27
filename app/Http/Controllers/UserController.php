<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
        
        // $user = $request->all();

        // $newUser = new User([
        //     'username' => $user['name'],
        //     'email' => $user['email'],
        //     'password' => $user['password'],
        // ]);
        // $newUser->save();
        public function store(Request $request)
        {
            $validated_input = $request->validate([
                'username' => 'required|min:4|max:10',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:6'
            ]);
    
            try {
                $validated_input['password'] = Hash::make($validated_input['password']);
                User::create($validated_input);
                return redirect('/login')->with('success', 'Signup successful');
            } catch (QueryException $exception) {
                return redirect()->back()->withInput()->withErrors(['email' => 'The email address is already in use. Please choose a different email.']);
            }
        }
}
