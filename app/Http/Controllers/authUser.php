<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authUser extends Controller
{
    // ADMIN PAGE
    public function indexAdmin()
    {
        if(empty(Auth::id()))
                return view('pages.admin');

        return redirect()->route('products');

    }
    public function adminLogin(Request $request)
    {
        return redirect()->route('products');
    }
    public function userLogout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }
}
