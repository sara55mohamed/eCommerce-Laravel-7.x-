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

        $credentials = Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);

        // dd($credentials);

        if (!is_null($credentials)) {
            return redirect()->route('users');

            // return $next($request);
        }

        return redirect()->route('admin')->with('error', 'Oppes! You have entered invalid credentials');
    }
}
// $credentials = $request->only('email', 'password');

// if (Auth::attempt($credentials)) {
//     // Authentication passed...
//     return redirect()->intended('dashboard');
// }