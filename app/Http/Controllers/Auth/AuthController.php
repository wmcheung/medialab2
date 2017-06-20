<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request) {
        dd($request->all());
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request) {
        
    }
}