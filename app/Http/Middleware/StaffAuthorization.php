<?php

namespace App\Http\Middleware;

use App\Staff;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Closure;

class StaffAuthorization
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
        if(Auth::id()){
            $check = Staff::checkAuthouriz(Auth::id());
    
            if ($check->type == 'admin') {
                return $next($request);
            }    
            return redirect()->route('products')->with('success', 'You have been login as worker.');
        }
        // dd('sara');
        return redirect()->route('login')->with('error', 'Not valid staff.');
    }
}
