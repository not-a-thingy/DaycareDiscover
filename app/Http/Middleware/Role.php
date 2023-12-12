<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->role==1){
            return $next($request);
        }else if(auth()->user()->role==2){
            return $next($request);
         }else{ 
            return redirect('home')->with('error', 'You dont have admin access ');
        }
       
    }
}
