<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class IsAdmin
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
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }

        return redirect('home');
    }
    // public function handle($request, Closure $next)
    // {
    //     if(!Auth::user()->Is_Admin){
    //         return redirect('home');
           
    //     }

    //     return $next($request);
    // }
 


// class IsAdmin
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @return mixed
//      */
//     public function handle($request, Closure $next)
//     {
//         if(auth()->user()->is_admin == 1){
//             return $next($request);
//         }

//         return redirect('home');
//     }
//     // public function handle($request, Closure $next)
//     // {
//     //     if(!Auth::user()->Is_Admin){
//     //         return redirect('home');
           
//     //     }

//     //     return $next($request);
//     // }
}
}