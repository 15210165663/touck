<?php

namespace App\Http\Middleware;

use Closure;

class oldmiddleware
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
        echo '123';die;
        return $next($request);
    }
}
