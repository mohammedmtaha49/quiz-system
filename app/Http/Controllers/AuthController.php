<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function storeLogin(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'name'     => $request->name,
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
}