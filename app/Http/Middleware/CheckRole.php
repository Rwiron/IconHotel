<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$roles  // Allow multiple roles
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('loginPage')->with('error', 'You must be logged in to access this page.');
        }

        $user = Auth::user();
        if ($user->role !== $role) {
            Session::flash('error', 'You do not have permission to access this page.');
            return redirect('/');
        }

        return $next($request);
    }
}