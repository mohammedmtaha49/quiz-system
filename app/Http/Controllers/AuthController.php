<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function storeLogin(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'email'     => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        } 

        return redirect()->back()->with(
            'error',
            'name or password is incorrect'
        );
    }

    public function register()
    {
        return view('auth.register');
    }

    public function storeRegister(RegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect()->route('login')->with(
            'success', 
            'Your account has been created successfully . Please Log in .'
        );
    }
}