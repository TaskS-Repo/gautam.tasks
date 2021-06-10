<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class roleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  \String  $rolecheck
     * @return mixed
     */
    public function handle(Request $request, Closure $next,String $rolecheck)
    {
        if( $rolecheck=="admin" && auth()->user()->role!=1 )
        {
            abort(403);
        }
        if($rolecheck=="parent" && auth()->user()->role!=2)
        {
            abort(403);
        }
        if($rolecheck=="teacher" && auth()->user()->role!=3)
        {
            abort(403);
        }
        if($rolecheck=="student" && auth()->user()->role!=4)
        {
            abort(403);
        }
        return $next($request);
    }
}
