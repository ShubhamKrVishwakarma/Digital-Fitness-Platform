<?php

use Illuminate\Support\Facades\Route;

Route::view('/login', 'login')->name('login');
Route::view('/signup', 'signup')->name('signup');
Route::view('/register', 'register')->name('register');

