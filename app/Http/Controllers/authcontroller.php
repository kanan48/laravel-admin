<?php

namespace App\Http\Controllers;
use App\Models\login;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class authcontroller extends Controller
{
    public function postLogin(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('name', 'password');
    
        // Retrieve the user from the database based on the provided username
        $user = login::where('name', $credentials['name'])->first();
    
        if ($user && $user->password === $credentials['password']) {
            // Authentication successful
            Auth::login($user); // Log in the user
            return redirect()->route('add_page'); // Use the named route 'add_page'
        }
    
        // Authentication failed
        return redirect()->route('login')->withSuccess('Oops! You have entered invalid credentials');
    }
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}
