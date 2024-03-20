<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\QueryController;
use App\Models\Query;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Shop Page
Route::get('/shop' , [ProductController::class , 'index'])->name('shop');
Route::get('/shop/{id}' , [ProductController::class , 'addToCart'])->middleware('auth')->name('addToCart');

// Community Page
Route::get('/community', function() {
    return view('community');
})->name('community');

// Message Page
Route::get('/message', function() {
    return view('message');
})->middleware('auth')->name('message');

// Profile Page
Route::get('/profile/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/profile-edit/{id}', [UserController::class, 'profile_edit'])->name('user.profile_edit');

Route::post('/profile/{id}',[UserController::class,'update'])->name('user.update');

Route::post('/profile',[UserController::class,'update_pass'])->name('user.update_pass');


// Cart Page
Route::get('/cart',[
    CartController::class, 'index'
])->middleware('auth')->name('cart');

Route::delete('/cart/{id}',[
    CartController::class, 'destroy'
])->middleware('auth')->name('product.delete');

Route::delete('/cart',[
    CartController::class, 'delete'
])->middleware('auth')->name('product.delete.all');

Route::post('/cart/edit/{id}',[
    CartController::class, 'update'
])->middleware('auth')->name('cart.update');

// Orders Page
Route::get('/orders', function () {
    return view('orders');
})->middleware('auth')->name('orders');

// About Page
Route::get('/about', function() {
    return view('about');
})->name('about');

// Contact Page
Route::get('/contact', [QueryController::class, "index"])->name('contact');

Route::post('/contact', [QueryController::class, "store"])->name('contact.store');