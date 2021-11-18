<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;

class homeProduct extends Controller
{
    // PRODUCT PAGE
    public function indexProducts()
    {

        return view('pages.products');
    }
    // VIEW USERS
    public function index()
    {

        $product = Products::getProducts();

        return view('pages/SQL_product.view', ['viewProduct' => $product]);
    }
}
