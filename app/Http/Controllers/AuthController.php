<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin(Request $request)
    {
        // Dummy Auth logic
        session(['user' => 'dummy_user']);
        return redirect('/');
    }

    public function signup(Request $request)
    {
        // Dummy Registration logic
        return redirect('/signin');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
