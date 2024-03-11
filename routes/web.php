<?php

use App\Http\Controllers\QueryController;
use App\Models\Query;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Shop Page
Route::get('/shop', function() {
    return view('shop');
})->name('shop');

// Community Page
Route::get('/community', function() {
    return view('community');
})->name('community');

// Message Page
Route::get('/message', function() {
    return view('message');
})->name('message');

// Profile Page
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Cart Page
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Orders Page
Route::get('/orders', function () {
    return view('orders');
})->name('orders');

// About Page
Route::get('/about', function() {
    return view('about');
})->name('about');

// Contact Page
Route::get('/contact', [QueryController::class, "index"])->name('contact');

Route::post('/contact', [QueryController::class, "store"])->name('contact.store');

