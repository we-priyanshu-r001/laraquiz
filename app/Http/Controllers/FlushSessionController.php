<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlushSessionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->session()->invalidate();
        return redirect()->route('show.user.dashboard');
    }
}
