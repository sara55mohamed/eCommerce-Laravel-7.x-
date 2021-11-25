<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authStaff extends Controller
{
    // LOGIN PAGE
    public function indexLogin()
    {
        if(empty(Auth::id()))
                return view('pages.login');

        return redirect()->route('products');

    }
    public function staffLogin(Request $request)
    {
        return redirect()->route('products');
    }
    public function staffLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
