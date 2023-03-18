<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SupCategoryController;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

        $categories =Category::with(['supCategories'=>function($query){
            return $query->whereNot('title',"like","%10%");
        }])->get();


    return view('front.index',compact('categories' ));
})->name('front');

Route::get('/wishlist', function () {
    return view('front.wishlist');
})->name('front.wishlist');

Route::get('/cart', function () {
    return view('front.cart');
})->name('front.cart');

Route::get('/account', function () {
    return view('front.account');
})->name('front.account');

Route::get('/view-product', function () {
    return view('front.view-product');
})->name('front.view-product');

Route::get('/product-category', function () {
    return view('front.product-category');
})->name('front.product-category');


Route::group(['middleware' => 'auth'],function (){
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin');
    Route::resource('/users', \App\Http\Controllers\UsersController::class);
    Route::resource('/roles', \App\Http\Controllers\RoleController::class);
    Route::resource('/permissions', \App\Http\Controllers\PermissionController::class);

    Route::resource('announcements', \App\Http\Controllers\AnnouncementController::class);
   Route::post('announcements',[\App\Http\Controllers\AnnouncementController::class,'store'])->name('announcements.store');
    Route::resource('categories', CategoryController::class);
    Route::resource('supcategories', SupCategoryController::class);
});



@include('auth.php');

