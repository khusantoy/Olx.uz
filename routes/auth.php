<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/login5', function () {
    return view('auth.login');
})->name('login5');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/logoutfront', function () {
    Auth::logout();
    return view('auth.login');
})->name('logout.front');

