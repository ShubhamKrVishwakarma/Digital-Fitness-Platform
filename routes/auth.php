<?php

use Illuminate\Support\Facades\Route;

Route::get("/login", function() {
    return view('Auth.login');
})->name('login');

Route::get("/signup", function() {
    return view('Auth.signup');
})->name('signup');

Route::get("/register", function() {
    return view('Auth.register');
})->name('register');