<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        /** @var User $user */
        $admin = Auth::user();
        $users = User::all();

        return view('dashboard', compact('admin', 'users'));
    }
}