<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Hash;

class homeStaff extends Controller
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
    public function indexStaff()
    {

        // dd('users');

        return view('pages.staff');
    }
    // VIEW USERS
    public function index()
    {

        $users = User::getStaff();

        return view('pages/SQL_staff.view', ['viewStaff' => $users]);
    }
    // ADD USERS

    public function view()
    {
        return view('pages/SQL_staff.add');
    }
    public function insert(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password'); // password
        $type = $request->get('type');
        $data = ["name" => $name, "email" => $email, "password" => Hash::make($password), "type" => $type];
        $adding = User::addStaff($data);
        $request->session()->flash('success', 'Item created successfully!');
        $request->session()->flash('alert-class', 'alert-danger');
        return view('pages/SQL_staff.add', ['add_staff' => $adding]);
    }
    // SEARCH USERS
    public function viewSearch()
    {
        return view('pages/SQL_staff.search');
    }
    public function search(Request $request)
    {
        $search = User::searchStaff($request->get('email'));
        return view('pages/SQL_staff.search', ['staff' => $search]);
    }
    // DELETE USERS
    public function viewDelete()
    {
        return view('pages/SQL_staff.delete');
    }
    public function delete(Request $request)
    {
        $delete = User::deleteStaff($request->get('email'));
        // $request->session()->flash('success', 'record delete successfully!');
        // $request->session()->flash('alert-class', 'alert-danger');
        return redirect()->route('view.delete')->with('alert', 'Record deleted successfully!');
        // return view('pages/SQL_staff.delete', ['staff' => $delete]);
    }
    // EDIT USERS
    public function viewEdit()
    {
        return view('pages/SQL_staff.edit');
    }
    public function edit(Request $request)
    {
        // dd($request);
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        $type = $request->get('type');
        $data = ["name" => $name, "email" => $email,"password" => Hash::make($password), "type" => $type];
        $edit = User::editStaff($data, $email);
        $request->session()->flash('success', 'record edit successfully!');
        $request->session()->flash('alert-class', 'alert-danger');
        return view('pages/SQL_staff.edit', ['staff' => $edit]);
    }
}
