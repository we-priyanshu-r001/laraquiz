<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index(){
    
        $user_id = session()->get('user_id');

        if(!$user_id){
            return redirect()->route('show.user.login')->withErrors('Please Login');
        }

        // Eager Loading user with assements
        $user = User::with('assessments')->findOrFail($user_id);

        $questions = $user->questions;

        $categories = Category::all();

        if(!$user){
            return redirect()->route('show.user.login')->withErrors('Some unknown error occurred');
        }

        return view('pages.user.dashboard', compact('user', 'categories', 'questions'));
    }

    public function showRegister(){
        return view('pages.user.register');
    }

    public function showLogin(){
        return view('pages.user.login');
    }

    public function register(Request $request){

        
        $validated = Validator::make($request->all(), [
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
            ])->validateWithBag('user');
        
        // Check if email exists
        $user = User::where('email', $request->email)->first();
        if($user){
            return back()
                ->withErrors(['email' => 'An account with this email already exists'], 'user')
                ->withInput();
        }

        // Create a new user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        
        return redirect()->route('show.user.dashboard')->with('status', "User Registered Successfully");
    }

    public function login(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'] 
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user){
            return back()->withErrors(['email' => 'There\'s no account with this email'])->withInput();
        }
        
        if(!Hash::check($request->password, $user->password)){
            return back()->withErrors(['password' => 'Incorrect Password'])->withInput();
        }
        
        session(['user_id' => $user->id]);

        if($user->role == "admin"){
            return redirect()->route('show.admin.dashboard');
        }

        return redirect()->route('show.user.dashboard');
    }

    public function logout(Request $request){
        // return $request;
        $request->session()->forget('user_id');

        return redirect()->route('show.user.login');
    }
}
