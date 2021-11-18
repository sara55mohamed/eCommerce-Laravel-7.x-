<?php

namespace App\Http\Middleware;
// use App\Providers\RouteServiceProvider;

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
        // dd($request->all());
        if (Auth::check()) {
            // The user is logged in...
            return  route('admin');
            session_start();
            $_SESSION['email'] = $request->get('email');
            $_SESSION['password'] =  $request->get('password');
            $_SESSION['type'] = $request->get('type');


            if ($_SESSION['type'] == 'admin') {
                return view('pages.users');
            } elseif ($_SESSION['type'] == 'worker') {
                return view('pages.products');
            } else {
                return back()->with('error', 'Wrong Login Details');
            }

            function logout()
            {
                Auth::logout();
                return redirect('pages.admin');
            }
            // Auth::logout();

            // abort(403);

        }
        return $next($request);
    }
}
// return redirect(RouteServiceProvider::admin);
        
        // $user_data = array(
        // 'email'  => $request->get('email'),
        // 'password' => $request->get('password'),
        // 'type' => $request->get('type'),
        // );
          // echo"<script>alert('Invalid Staff')</script>";
    // }  
    //         if(Auth::attempt($user_data))
    //         {
    //         return redirect('pages.admin');
    //         }
    //         else
    //         {
    //         return back()->with('error', 'Wrong Login Details');
    //         }
    //         function successlogin()
    //         {
    //             return view('pages.users');
    //         }