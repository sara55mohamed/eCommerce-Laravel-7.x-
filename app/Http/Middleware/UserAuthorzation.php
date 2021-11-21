<?php

namespace App\Http\Middleware;

use App\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Closure;

class UserAuthorzation
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
        // dd(Auth::id());
        $check = User::checkAuthourz($request->get('type'));

        if ($check -> type == 'admin') {
            dd($check);

            return redirect()->route('users');

            // return $next($request);
        } elseif ($check -> type == 'worker') {
            // dd($check);

            return redirect()->route('products');
        }

        return redirect()->route('admin');
        // dd($request);
        // return $next($request);

    }
}
