<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        // Eager Loading Users with their address from addresses table
        $users = User::where('role', 'not like', 'admin')->with('address')->get();
        $modules = Module::all();
        return view('pages.adminDashboard', compact('users', 'modules'));
    }

    public function module($id){
        $module = Module::find($id);
        $comments = $module->comments;
        $questions = $module->questions;
        return view('pages.module', compact('questions', 'module', 'comments'));
    }
}
