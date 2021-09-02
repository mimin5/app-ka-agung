<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('username','password');

        if(auth::attempt($credentials))
        {
            return redirect(route('Dashboard'));
        }else{
            return redirect(route('login'))->with('status','username dan password tidak ditemukan');
        }
    }
}
