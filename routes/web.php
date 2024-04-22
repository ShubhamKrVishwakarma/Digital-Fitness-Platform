<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\WorkoutPlansController;

// Home Page Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::redirect('/home', '/');

// Profile Page Routes
Route::group(['controller' => UserController::class], function() {
    Route::get('/profile/{id}', 'show')->name('user.show');
    Route::get('/profile-edit/{id}', 'profile_edit')->name('user.profile_edit');
    Route::post('/profile/{id}', 'update')->middleware('auth')->name('user.update');
    Route::post('/profile', 'update_pass')->middleware('auth')->name('user.update_pass');
});
 
// Shop Page Routes
Route::group(['controller' => ProductController::class], function() {
    Route::get('/shop' , 'index')->name('shop');
    Route::get('/shop/{id}' , 'addToCart')->middleware('auth')->name('addToCart');
});

// Product Details
Route::group(['controller' => ProductController::class], function() {
    Route::get('/product/{id}', 'product_details')->name('product.details');
    Route::post('/product/review', 'reviewProduct')->name('product.review');
});

// Message Page Routes
Route::get('/message', function() {
    return view('message');
})->middleware('auth')->name('message');

// Cart Page Routes
Route::group(['controller' => CartController::class, 'middleware' => 'auth'], function() {
    Route::get('/cart', 'index')->name('cart');
    Route::post('/cart/edit/{id}', 'update')->name('cart.update');
    Route::delete('/cart/{id}', 'destroy')->name('product.delete');
    Route::delete('/cart', 'delete')->name('product.delete.all');
});

// Orders Page Routes
Route::group(['controller' => OrderController::class, 'middleware' => 'auth'], function() {    
    // Orders Page
    Route::get('/orders', 'index')->name('orders');
    // Order Details
    Route::get('/orders/{id}', 'orderDetails')->name('orders.details');
    Route::delete('/orders/{id}', 'cancelOrder')->name('cancel.order');
});

// Checkout Page Routes
Route::group(['controller' => CheckoutController::class, 'middleware' => 'auth'], function() {
    Route::get('/checkout', 'index')->name('checkout');
    Route::post('/checkout/{total_price}', 'store')->name('checkout.store');
    
    // Payment
    Route::get('payment/info', 'paymentInfo')->name('payment.info');
});

// Contact Page Routes
Route::group(['controller' => QueryController::class], function() {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'store')->name('contact.store');
});

//Workout Page Routes
Route::group(['controller' => WorkoutPlansController::class], function() {
    Route::get('/workout_plans', 'index')->name('workout.plans');
    Route::get('/workout/{id}', 'index')->middleware('auth')->name('workout');
    Route::post('/workout_completed/{id}', 'store')->middleware('auth')->name('workout.completed');
});

// Trainers Routes
Route::group(['controller' => TrainerController::class], function() {
    Route::get('/trainers', 'index')->name('trainers');
    Route::post('/trainers', 'reviewTrainer')->name('trainers.review');
    Route::get('/select-trainers', 'trainerSelection')->name('select.trainer');
});

// Community Page
Route::group(["controller" => PostController::class], function() {
    Route::get('/community', 'index')->name('community');

    Route::group(["middleware" => "auth"], function() {
        Route::post('/post/share', 'share')->name('post.share');
        Route::post('/post/like/{id}', 'like')->name('post.like');
        Route::post('/post/unlike/{id}', 'unlike')->name('post.unlike');
        Route::post('/post/comment', 'comment')->name('post.comment');
        Route::delete('/post/uncomment', 'uncomment')->name('post.uncomment');
        Route::post('/post/image', 'shareImage')->name('post.share.image');
        Route::post('/post/video', 'shareVideo')->name('post.share.video');
        Route::post('/trainer/follow', 'follow')->name('user.follow');
        Route::post('/trainer/unfollow', 'unfollow')->name('user.unfollow');
    });
});

// Trainers Pricing
Route::get('/pricing', function() {
    return view('pricing');
})->name('pricing');