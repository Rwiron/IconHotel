<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Ensure Session is imported

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role  // Role expected to access the route
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            // If the user is not logged in, redirect to login page with an error message
            return redirect('loginPage')->with('error', 'You must be logged in to access this page.');
        }

        $user = Auth::user();
        if ($user->role !== $role) {
            // If user does not have the required role, redirect to the home page with an error message
            Session::flash('error', 'You do not have permission to access this page.'); // Using Session to flash data
            return redirect('loginPage');
        }

        return $next($request);
    }
}