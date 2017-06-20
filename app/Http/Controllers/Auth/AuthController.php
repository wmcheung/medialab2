<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CreateRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request) {
        if(auth()->attempt(['email'=>$request->get('email'), 'password'=>$request->get('password')])) {
            return redirect()->route('dashboard.index')->with('Success', 'U bent ingelogd');
        }
        return redirect()->route('auth.login')->with('Error', 'Uw inloggegevens zijn incorrect');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(CreateRegisterRequest $request) {
        $user = User::create($request->all());
        auth()->login($user);

        return redirect()->route('dashboard.index')->with('Success', 'U bent ingelogd');
    }

    public function logout() {
        auth()->logout();

        return redirect()->route('auth.login')->with('Success', 'U bent uitgelogd');
    }
}