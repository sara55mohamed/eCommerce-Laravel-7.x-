<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authStaff extends Controller
{
    // ADMIN PAGE
    public function indexAdmin()
    {
        if(empty(Auth::id()))
                return view('pages.admin');

        return redirect()->route('products');

    }
    public function staffLogin(Request $request)
    {
        return redirect()->route('products');
    }
    public function staffLogout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }
}
