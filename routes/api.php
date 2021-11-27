<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\StaffPost;
// use App\Http\Controllers\postsApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', 'API\RegisterController@register');

Route::post('login', 'API\RegisterController@login');

Route::get('view-products', 'API\ProductController@index');

Route::post('store', 'API\ProductController@store');


// Route::middleware('auth:api')->group(function () {
//     Route::resource('products', 'API\ProductController');
// });


// Route::get('/login', [App\Http\Controllers\postsApi::class, 'indexLogin'])->name("login");

// Route::group(['middleware' => 'auth:api'], function () {
//     // Route::resource('products', 'API\ProductController');

//     Route::post('/login', [App\Http\Controllers\postsApi::class, 'staffLogin'])->name("view.login");

//     Route::get('/logout', [App\Http\Controllers\postsApi::class, 'staffLogout'])->name("logout");
//                            // PRODUCT ROUTES

//     Route::get('/products', [App\Http\Controllers\homeProduct::class, 'indexProducts'])->name("products");

//     Route::get('/view-products', [App\Http\Controllers\homeProduct::class, 'index'])->name("view.products");
// });

// Route::group(['middleware' => 'autho:api'], function () {

//                              // STAFF ROUTES

//     Route::get('/staff', [App\Http\Controllers\homeStaff::class, 'indexStaff'])->name("staff");

//     Route::get('/view-staff', [App\Http\Controllers\homeStaff::class, 'index'])->name("view.staff");

//     Route::get('/view-add', [App\Http\Controllers\homeStaff::class, 'view'])->name("view.add");

//     Route::post('/insert', [App\Http\Controllers\homeStaff::class, 'insert'])->name("insert");

//     Route::get('/view-search', [App\Http\Controllers\homeStaff::class, 'viewSearch'])->name("view.search");

//     Route::post('/search', [App\Http\Controllers\homeStaff::class, 'search'])->name("search");

//     Route::get('/view-delete', [App\Http\Controllers\homeStaff::class, 'viewDelete'])->name("view.delete");

//     Route::post('/delete', [App\Http\Controllers\homeStaff::class, 'delete'])->name("delete");

//     Route::get('/view-edit', [App\Http\Controllers\homeStaff::class, 'viewEdit'])->name("view.edit");

//     Route::post('/edit', [App\Http\Controllers\homeStaff::class, 'edit'])->name("edit");
// });
