<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        /** @var User $admin */
        $admin = Auth::user();
        $users = User::all();

        return view('dashboard', compact('admin', 'users'));
    }

    public function categories()
    {
        /** @var User $admin */
        $admin = Auth::user();
        
        return view('categories', compact('admin'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}