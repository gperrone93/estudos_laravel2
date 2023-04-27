<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(Request $r)
    {
        if(Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register(Request $r)
    {
        if(Auth::check()) {
            return redirect()->route('home');
        }
        return view('register');
    }

    public function login_action(Request $r) {
        $validate = $r->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if( Auth::attempt($validate) ) {
            return redirect()->route('home');
        }
    }

    public function register_action(Request $r)
    {
        $r->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);



        $user = $r->only('name', 'email', 'password','password_confir');

        $user['password'] = Hash::make($user['password']);


        User::create($user);

        return redirect(route('login'));

    }
}
