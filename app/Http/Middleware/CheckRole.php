<?php namespace App\Http\Middleware;

use Role;
use Auth;
use Closure;

class CheckRole {

    public function handle($request, Closure $next)
    {
        if(!Auth::guest() && Auth::user()->is('admin') )
        {
            return $next($request);
        }
        return redirect('admin/auth');
    }
}