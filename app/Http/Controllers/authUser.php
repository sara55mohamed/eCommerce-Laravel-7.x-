<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use App\User;
use Illuminate\Http\Request;

class authUser extends Controller
{ 
// ADMIN PAGE
    public function indexAdmin(){
        return view('pages.admin');
    }
    public function adminLogin(Request $request){

        // return $request->input();
        $request->session()->put('data',$request->input());
        return redirect('pages.admin');
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