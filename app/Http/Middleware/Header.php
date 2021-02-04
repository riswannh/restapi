<?php

namespace App\Http\Middleware;

use Closure;

class Header
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
         $user = "admin";
         $pass = "admin123";
        if($request->header('X-Auth-User') == $user && $request->header('X-Auth-Pass') == $pass){
            return $next($request);
        }else{
            return "gagal";
        }
    }
}