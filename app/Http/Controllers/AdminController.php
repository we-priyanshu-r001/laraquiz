<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // Eager Loading Users with their address from addresses table
        $users = User::where('role', 'not like', 'admin')->with('address')->get();
        return view('pages.adminDashboard', compact('users'));
    }
}
