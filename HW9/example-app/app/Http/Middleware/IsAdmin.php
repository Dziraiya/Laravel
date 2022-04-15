<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user->is_admin !== TRUE) {
            return abort(404);
        }

        return $next($request);
    }
}
