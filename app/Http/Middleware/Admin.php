<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role === "admin") {
                return $next($request);
            } else {
                return response("<br/><br/><br/> <center><h2>You are not allowed to access the page.</h2></center>");
            }
        } else {
            return redirect('/login');
        }
    }
}
