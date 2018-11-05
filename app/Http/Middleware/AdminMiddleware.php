<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AdminMiddleware
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
        if ($request->user() && $request->user()->user_type != 'admin')
        {
            return new Response(view('unauthorized')->with('role', 'admin'));
        }
        return $next($request);
    }
}
