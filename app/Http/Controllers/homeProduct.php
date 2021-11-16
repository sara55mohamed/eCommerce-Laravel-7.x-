<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Product;
// use Illuminate\Http\Request;

class homeUser extends Controller
{  
    // HOME PAGE
    public function indexProducts(){

        return view('pages.products');
    }
}