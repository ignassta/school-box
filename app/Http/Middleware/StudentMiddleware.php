<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class StudentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->user_type != 'student')
        {
            return new Response(view('unauthorized')->with('role', 'student'));
        }
        return $next($request);
    }
}
