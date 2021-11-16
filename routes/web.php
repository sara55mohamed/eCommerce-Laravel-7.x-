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
    Route::get('/', [App\Http\Controllers\homeUser::class,'indexHome'])->name("home");

    Route::get('/category', [App\Http\Controllers\homeUser::class,'indexCategory'])->name("category");

    Route::get('/shoping', [App\Http\Controllers\homeUser::class,'indexShoping'])->name("shoping");
    
    Route::group(['middleware'=>'UserAuthentication'],function(){ 

    Route::get('/admin', [App\Http\Controllers\authUser::class,'indexAdmin'])->name("admin");

    Route::post('/admin-login', [App\Http\Controllers\authUser::class,'adminLogin'])->name("admin.login");
        });     
        
                            // USER ROUTE
    Route::get('/users', [App\Http\Controllers\homeUser::class,'indexUsers'])->name("users");

    Route::get('/view-users', [App\Http\Controllers\homeUser::class,'index'])->name("view.users");

    Route::get('/view', [App\Http\Controllers\homeUser::class,'view'])->name("view.add");
    
    Route::post('/insert', [App\Http\Controllers\homeUser::class,'insert'])->name("insert");

    Route::get('/view-search', [App\Http\Controllers\homeUser::class,'viewSearch'])->name("view.search");
    
    Route::post('/search', [App\Http\Controllers\homeUser::class,'search'])->name("search");

    Route::get('/view-delete', [App\Http\Controllers\homeUser::class,'viewDelete'])->name("view.delete");
    
    Route::post('/delete', [App\Http\Controllers\homeUser::class,'delete'])->name("delete");

    Route::get('/view-edit', [App\Http\Controllers\homeUser::class,'viewEdit'])->name("view.edit");
    
    Route::post('/edit', [App\Http\Controllers\homeUser::class,'edit'])->name("edit");

                            // PRODUCT ROUTE
    Route::get('/products', [App\Http\Controllers\homeProduct::class,'indexProducts'])->name("products");






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