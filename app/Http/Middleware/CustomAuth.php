<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('user_id')){
            return redirect()->route('show.user.login')->withErrors(['Please login']);
        }

        $user = User::find($request->session()->get('user_id'));

        if($user->role == 'admin'){
            return redirect()->route('show.admin.dashboard');
        }
        
        return $next($request);
    }
}
