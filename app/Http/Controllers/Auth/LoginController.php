<?php

// app/Http/Controllers/Auth/LoginController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('akun')->attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->with('error', 'Invalid email or password');
    }
}
