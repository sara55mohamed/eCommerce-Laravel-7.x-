<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
    // public function adminLogin(Request $request){
    //     $this->validate($request,[
    //     'email' => 'required|email',
    //     'password' => 'required|password'
    //     ]);
    //     if (Auth::guard('admin'))->attempt(['email' => $email, 'password' => $password])
    //     {
    //         return redirect()->intended('pages.users');
    //     }
    //     return back()->withInput($request->only('email','remember'));
    // }
}
