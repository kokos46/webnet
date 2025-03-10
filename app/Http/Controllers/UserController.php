<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(): View{
        return view('login');
    }

    public function register(): View{
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $login = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $users = User::where('name', $login)->first();
        if($users){
            return back()->withErrors([
                'name' => 'Username already exists',
            ]);
        }

        $user = User::create(['name' => $login, 'email' => $email, 'password' => Hash::make($password)]);
        Auth::login($user);
        return redirect('/');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect('/');
        }
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }
}
