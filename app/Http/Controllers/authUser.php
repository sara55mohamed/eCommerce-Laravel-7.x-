<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class authUser extends Controller
{
    // ADMIN PAGE
    public function indexAdmin()
    {
        return view('pages.admin');
    }
    public function adminLogin(Request $request)
    {

        $check = User::checkUser($request->get('email'), $request->get('password'));
        return view('pages.users', ['check_User' => $check]);

        // return $request->input();
        // $request->session()->put('data',$request->input());
        // return redirect('pages.admin');
    }
    public function userLogout()
    {
        return view('pages.admin');
    }
}
