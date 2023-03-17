<?php

use Illuminate\Support\Facades\Auth;

Route::get('/login', function () {
   return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/logoutfront', function () {
    Auth::logout();
    return view('auth.login');
})->name('logoutfront');
