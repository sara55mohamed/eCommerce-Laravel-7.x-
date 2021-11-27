<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Redirect;

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

    // STAFF PAGE
    public function indexStaff()
    {

        // dd('users');

        return view('pages.staff');
    }
    // VIEW STAFF
    public function index()
    {

        $users = Staff::getStaff();

        return view('pages/SQL_staff.view', ['viewStaff' => $users]);
    }
    // ADD STAFF

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
        $adding = Staff::addStaff($data);
        $request->session()->flash('success', 'Record Created Successfully!');
        $request->session()->flash('alert-class', 'alert-danger');
        return view('pages/SQL_staff.add', ['add_staff' => $adding]);
    }
    // SEARCH STAFF
    public function viewSearch()
    {
        return view('pages/SQL_staff.search');
    }
    public function search(Request $request)
    {
        $search = Staff::searchStaff($request->get('email'));
        // return view('pages/SQL_staff.search', ['staff' => $search]);
        if ($search == true) {
            return view('pages/SQL_staff.search', ['staff' => $search])->with('success');
        }
        return redirect()->route('view.search')->with('warning', 'Staff with this email not record in database...');
    }
    // DELETE STAFF
    public function viewDelete()
    {
        return view('pages/SQL_staff.delete');
    }
    public function delete(Request $request)
    {
        $delete = Staff::deleteStaff($request->get('email'));

        Session::flash('alert-warning', 'warning');
        Session::flash('alert-success', 'success');

        if ($delete == true) {
            // return view('pages/SQL_staff.delete')->with('success', 'Record Deleted.');
            return redirect()->route('view.delete')->with('success', 'Record Deleted.');
        }
        return redirect()->route('view.delete')->with('warning', 'There was an error...');
        
        // return view('pages/SQL_staff.delete', ['staff' => $delete]);
    }
    // EDIT STAFF
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
        $edit = Staff::editStaff($data, $email);
        $request->session()->flash('success', 'Record Updated.');
        $request->session()->flash('alert-class', 'alert-danger');
        return view('pages/SQL_staff.edit', ['staff' => $edit]);
    }
}
