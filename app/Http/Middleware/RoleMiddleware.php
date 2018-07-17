<?php

namespace App\Http\Middleware;

use Closure;

use App;
use Illuminate\Support\Facades\Auth as Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $user = Auth::user();
        if ($user && $user->role !== $level){
            return App::abort(Auth::check() ? 403 : 401);
        }
        return $next($request);
    }
}
