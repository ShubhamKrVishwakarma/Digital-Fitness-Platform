<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(["controller" => AuthController::class], function() {
    Route::get('/login', 'login')->name('login');
    Route::get('/signup', 'signup')->name('signup');

    Route::post('/signup', 'create')->name('member.create');

    Route::post('/login', 'authenticate')->name('authenticate');
});