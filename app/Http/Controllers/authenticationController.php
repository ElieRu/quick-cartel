<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class authenticationController extends Controller
{
    public function login () 
    {
        return Inertia::render('Auth/Login');
    }

    public function register (User $users)
    {
        return Inertia::render('Auth/Register', [
            'users' => $users->all('email')
        ]);
    }

    public function forgot_password (User $users)
    {
        return Inertia::render('Auth/ForgotPassword', [
            'users' => $users->all('email')
        ]);
    }

    public function reset_password (Request $request) 
    {
        return Inertia::render('Auth/ResetPassword', [
            'email' => $request->email,
            'token' => $request->token
        ]);
    }
}
