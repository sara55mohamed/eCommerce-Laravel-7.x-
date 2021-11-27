<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

// use Validator;

class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        $name = $request->get('name');
        $email = $request->get('email');
        $password = Hash::make($request->get('password')); // password
        $type = $request->get('type');

        $data = ["name" => $name, "email" => $email, "password" => $password, "type" => $type];
        $adding = Staff::addStaff($data);

        return $this->sendResponse($adding, 'User register successfully.');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // if (Auth::id()) {
        //     return $next($request);
        // }
        // dd('s');
        $check = Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);

        if ($check == true) {
            return $this->sendResponse($check, 'User login successfully.');
            // return redirect()->route('staff')->with('success', 'You have been login as admin.');
        }
        return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);

        // return redirect()->route('login')->with('error', 'Not valid staff.');
    }

}
