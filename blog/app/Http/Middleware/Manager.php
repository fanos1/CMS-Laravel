<?php

namespace App\Http\Middleware;

use Closure;

// SONRADAN
use Illuminate\Support\Facades\Auth;

class Manager
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
        // ---------------
        // return $next($request); // no filters set, anyone can access /admin
        // -----------------------

        // Easy way to Restrict Access is to use AUTH FACADE
        if(!Auth::check()) 
        {
            return  redirect('users/login');
        }   
        else  
        {
            $user =  Auth::user(); // Fetch logged in user

            if($user->hasRole('manager'))
            {
                return  $next($request);
            }   
            else
            {
               return  redirect('/');
            }
        }

    }

}
