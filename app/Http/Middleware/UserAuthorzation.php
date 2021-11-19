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
        // Gate::define('edit-settings', function ($user) {
        //     return $user->isAdmin
        //                 ? Response::allow()
        //                 : Response::deny('You must be a super administrator.');
        // });
        $check = Auth::attempt(['type' => $request->get('type')]);

        if ($check['type'] == 'admin') {
            return redirect()->route('users');

            // return $next($request);
        }
        elseif ($check['type'] == 'worker'){
            return redirect()->route('products');
        }

        return redirect()->route('admin');
        // dd($request);
        // return $next($request);

    }
}
