<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Hash;

class homeUser extends Controller
{
    // HOME PAGE
    public function indexHome()
    {

        return view('pages.index');
    }
    // CATEGORY PAGE
    public function indexCategory()
    {

        return view('pages.category');
    }
    // SHOPING PAGE
    public function indexShoping()
    {

        return view('pages.shoping');
    }

    // USERS PAGE
    public function indexUsers()
    {

        // dd('users');

        return view('pages.users');
    }
    // VIEW USERS
    public function index()
    {

        $users = User::getUsers();

        return view('pages/SQL_users.view', ['viewUsers' => $users]);
    }
    // ADD USERS

    public function view()
    {
        return view('pages/SQL_users.add');
    }
    public function insert(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password'); // password
        $type = $request->get('type');
        $data = ["name" => $name, "email" => $email, "password" => Hash::make($password), "type" => $type];
        $adding = User::addUsers($data);
        $request->session()->flash('success', 'Item created successfully!');
        $request->session()->flash('alert-class', 'alert-danger');
        return view('pages/SQL_users.add', ['add_Users' => $adding]);
    }
    // SEARCH USERS
    public function viewSearch()
    {
        return view('pages/SQL_users.search');
    }
    public function search(Request $request)
    {
        $search = User::searchUser($request->get('email'));
        return view('pages/SQL_users.search', ['users' => $search]);
    }
    // DELETE USERS
    public function viewDelete()
    {
        return view('pages/SQL_users.delete');
    }
    public function delete(Request $request)
    {
        $delete = User::deleteUser($request->get('email'));
        $request->session()->flash('success', 'record delete successfully!');
        $request->session()->flash('alert-class', 'alert-danger');
        return view('pages/SQL_users.delete', ['users' => $delete]);
    }
    // EDIT USERS
    public function viewEdit()
    {
        return view('pages/SQL_users.edit');
    }
    public function edit(Request $request)
    {
        // dd($request);
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        $type = $request->get('type');
        $data = ["name" => $name, "email" => $email,"password" => Hash::make($password), "type" => $type];
        $edit = User::editUser($data, $email);
        $request->session()->flash('success', 'record edit successfully!');
        $request->session()->flash('alert-class', 'alert-danger');
        return view('pages/SQL_users.edit', ['users' => $edit]);
    }
}
