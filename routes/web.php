<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
                                // INTERFACE ROUTE

Route::get('/home', [App\Http\Controllers\homeStaff::class, 'indexHome'])->name("home");

Route::get('/category', [App\Http\Controllers\homeStaff::class, 'indexCategory'])->name("category");

Route::get('/shoping', [App\Http\Controllers\homeStaff::class, 'indexShoping'])->name("shoping");

Route::get('/login', [App\Http\Controllers\authStaff::class, 'indexLogin'])->name("login");

Route::group(['middleware' => 'StaffAuthentication'], function () {

    Route::post('/login', [App\Http\Controllers\authStaff::class, 'staffLogin'])->name("view.login");

    Route::get('/logout', [App\Http\Controllers\authStaff::class, 'staffLogout'])->name("logout");

                                    // PRODUCT ROUTES

    Route::get('/products', [App\Http\Controllers\homeProduct::class, 'indexProducts'])->name("products");

    Route::get('/view-products', [App\Http\Controllers\homeProduct::class, 'index'])->name("view.products");
});

Route::group(['middleware' => 'StaffAuthorization'], function () {
    
                                    // STAFF ROUTES

    Route::get('/staff', [App\Http\Controllers\homeStaff::class, 'indexStaff'])->name("staff");

    Route::get('/view-staff', [App\Http\Controllers\homeStaff::class, 'index'])->name("view.staff");

    Route::get('/view-add', [App\Http\Controllers\homeStaff::class, 'view'])->name("view.add");

    Route::post('/insert', [App\Http\Controllers\homeStaff::class, 'insert'])->name("insert");

    Route::get('/view-search', [App\Http\Controllers\homeStaff::class, 'viewSearch'])->name("view.search");

    Route::post('/search', [App\Http\Controllers\homeStaff::class, 'search'])->name("search");

    Route::get('/view-delete', [App\Http\Controllers\homeStaff::class, 'viewDelete'])->name("view.delete");

    Route::post('/delete', [App\Http\Controllers\homeStaff::class, 'delete'])->name("delete");

    Route::get('/view-edit', [App\Http\Controllers\homeStaff::class, 'viewEdit'])->name("view.edit");

    Route::post('/edit', [App\Http\Controllers\homeStaff::class, 'edit'])->name("edit");
});









     // Route::get('/category', function () {
    //             return view('pages.category');
    // })->name("category"); 
    // (URL, View, Array of Data)
        //   Route::view('contact-me', "contact");
        //     Route::view('contact-me',"pages.contact", [
        //         'page_name' => 'Contact Me Page',
        //         'page_description' => "This Is Description"
        //     ])->name("contact");
        // // 'page_description' => "<script> This Is Description </script>"
        //     Route::get('category/{id}', function ($id) {
                
        //         $cats = [
        //                 '1' => 'Games',
        //                 '2' => 'Programming',
        //                 '3' => 'Books'
        //     ];
        //         return view("pages.category", [
        //             'the_id' => $cats[$id] ?? "This Id Is NOT Found"
        //             // ?? like isset so if id not found will pass massage
        //         // $id = request("id");
        //         // return $id ;
        //         ]);
        //     });