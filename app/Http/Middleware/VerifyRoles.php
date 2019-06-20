<?php

namespace App\Http\Middleware;

use Closure;

class VerifyRoles
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
        $roles = array_slice(func_get_args(), 2);
        foreach ($roles as $role) {
            if(auth()->user()->hasRole([$role])){
                return $next($request);
            } 
        }
        return redirect()->route('home')->with('flash', 'Usted no tiene acesso a esta zona');
    }
}
