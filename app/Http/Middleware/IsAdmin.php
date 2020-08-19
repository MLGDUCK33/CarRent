<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guest()) {
            if (Auth::user()->permission == 'admin') {
                return $next($request);
            }

            return redirect()->route('home'); // If user is not an admin.
        } else {
            return redirect()->route('home');
        }

    }
}
