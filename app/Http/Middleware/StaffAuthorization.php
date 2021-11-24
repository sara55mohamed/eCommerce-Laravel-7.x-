<?php

namespace App\Http\Middleware;

use App\User;
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
            $check = User::checkAuthouriz(Auth::id());
    
            if ($check->type == 'admin') {
                return $next($request);
            }    
            return redirect()->route('products')->with('success', 'You have been login as worker.');
        }
        // dd('sara');
        return redirect()->route('admin')->with('error', 'Not valid staff.');
    }
}
