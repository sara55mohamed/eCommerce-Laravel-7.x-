<?php

namespace App\Http\Middleware;
// use App\Providers\RouteServiceProvider;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class UserAuthentication
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
        if (Auth::id()) {
            return $next($request);
        }
        // dd('s');
        $check = Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);

        if ($check == true) {
            return redirect()->route('staff')->with('success', 'You have been login as admin.');
        }
        return redirect()->route('admin')->with('error', 'Not valid staff.');
    }
}
