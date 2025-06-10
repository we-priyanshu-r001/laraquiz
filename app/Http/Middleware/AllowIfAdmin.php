<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class AllowIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!$request->session()->has('user_id')){
            return redirect()->route('show.user.login')->withErrors('Please Login First');
        }

        $user = User::find($request->session()->get('user_id'));
        
        if(!$user->role == 'admin'){
            return redirect()->route('show.user.dashboard')->withErrors('Unauthorized Access');
        }

        return $next($request);
    }
}
