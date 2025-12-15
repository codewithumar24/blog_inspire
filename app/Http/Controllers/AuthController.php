<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
}
