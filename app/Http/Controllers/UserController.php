<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index(){
        return view('pages.dashboard');
    }

    public function register(){
        return view('pages.user.register');
    }

    public function login(){
        return view('pages.user.login');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            "email" => ['required', 'email', "max:255"],
            'password' => [
                'required', 
                'string', 
                'confirmed', 
                Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
            ],
            'password_confirmation' => ['required']
        ]);
        
        return redirect('/user')->with('status', "User Registered Successfully");
    }
}
