<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(LoginRequest $request)
    {
        $request->validated();

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back()->withErrors([
                'username' => 'Username atau password salah.',
                'password' => 'Username atau password salah.',
            ])->withInput($request->only('username'));
        }

        return redirect("/");
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/");
    }
}
