<?php

namespace App\Http\Middleware;

use Closure;

class PostsMiddleware
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

        if ($request->can_posts == 1) {
            return true;
        }

        return $next($request);
    }
}
