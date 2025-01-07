<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserIsDeveloper
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // role_id 3 is voor nu nog employee, moet aangepast worden naar iets anders
        if (auth()->user()->role_id === 3) {
            return $next($request);
        }

        return $next($request);
    }
}