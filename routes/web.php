<?php

use App\Http\Controllers\AddRatingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SupCategoryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\User\AnnouncementController as UserAnnouncementController;

use App\Models\Announcement;


use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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


Route::get('/rating', function () {


    $elon = Announcement::find(1);

    dd($elon->averageRating);
});
Route::get('/', function () {

    $categories = Category::with(['supCategories' => function ($query) {
        return $query->whereNot('title', "like", "%10%");
    }])->get();
    return view('front.index', compact('categories'));
})->name('front');

Route::get('/MyAnno', [UserAnnouncementController::class, 'index'])->name('front.MyAnno')->middleware('auth');
Route::get('/edit{announcement}', [UserAnnouncementController::class, 'edit'])->name('front.edit')->middleware('auth');

Route::get('/wishlist', function () {
    $announcements = Announcement::all();
    $categories = Category::with(['supCategories' => function ($query) {
        return $query->whereNot('title', "like", "%10%");
    }])->get();
    return view('front.wishlist', compact('categories', 'announcements'));
})->name('front.wishlist')->middleware('auth');

Route::get('/cart', function () {
    $categories = Category::with(['supCategories' => function ($query) {
        return $query->whereNot('title', "like", "%10%");
    }])->get();
    return view('front.cart', compact('categories'));
})->name('front.cart')->middleware('auth');

@include('auth.php');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/view-product', function () {
    return view('front.view-product');
})->name('front.view-product');

Route::get('/product-category', function () {
    return view('front.product-category');
})->name('front.product-category');

Route::get('/oferta', function () {
    return view('auth.oferta');
});

Route::get('/account', function () {
    $categories = Category::with('supcategories')->get();
    return view('front.account', compact('categories'));
})->name('front.account');


// show ad
Route::get('/ad/{announcement}', [UserAnnouncementController::class, 'show'])->name('ad-show');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin');
    Route::get('/profile', function () {

        $users = \App\Models\User::find(auth()->user()->id);
        return view('admin.profile', compact('users'));
    })->name('profile');

    Route::resource('/users', \App\Http\Controllers\UsersController::class);
    Route::resource('/roles', \App\Http\Controllers\RoleController::class);
    Route::resource('/permissions', \App\Http\Controllers\PermissionController::class);
    Route::resource('announcements', \App\Http\Controllers\AnnouncementController::class);
    Route::post('announcements', [\App\Http\Controllers\AnnouncementController::class, 'store'])->name('announcements.store');
    Route::resource('categories', CategoryController::class);
    Route::resource('supcategories', SupCategoryController::class);

    Route::get('/rate/{announcement}', [AddRatingController::class, 'index'])->name('addRate');
});

Route::get('/history', function () {
    $announcements = auth()->user()->ads()->paginate(20);
    $categories = Category::all();
    return view('front.history', compact('announcements', 'categories'));
})->name('front.history');

Route::get('/history/{announcement}/destroy', function ($announcement) {
    auth()->user()->ads()->detach($announcement);
    return redirect()->back();
})->name('front.history.destroy');
