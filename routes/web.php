<?php

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
    return view('front.index');
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
});


@include('auth.php');

