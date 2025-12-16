<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginform()
    {
        return view("auth.login");
    }

    public function signform()
    {
        return view("auth.signup");
    }


    public function register(Request $request)
    {
        $request->validate([
            "first_name" => "required|string|min:3",
            "last_name" => "required|string|min:3",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed|min:6"
        ]);

        $user =  User::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return redirect("/login");
    }

    public function login(Request $request)
    {
        $user =  $request->validate([
            'email' => 'required|email|string',
            'password' => 'string|required'
        ]);
        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'your credential or invalid'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
