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
use App\Http\Controllers\UserWorkoutLogController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\WorkoutPlansController;

// Home Page Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::redirect('/home', '/');

// Profile Page Routes
Route::group(['controller' => UserController::class], function() {
    Route::get('/profile/{id}', 'show')->name('user.show');
    Route::get('/profile-edit/{id}', 'profile_edit')->middleware('auth')->name('user.profile_edit');
    Route::put('/profile/{id}', 'update')->middleware('auth')->name('user.update');
    Route::patch('/profile', 'update_pass')->middleware('auth')->name('user.update_pass');
    Route::get('/profile/delete/{id}', 'delete')->middleware('auth')->name('user.delete');
});
 
// Shop Page Routes
Route::group(['controller' => ProductController::class], function() {
    Route::get('/shop' , 'index')->name('shop');
    Route::get('/shop/{id}' , 'addToCart')->middleware('auth')->name('addToCart');
});

// Product Details
Route::group(['controller' => ProductController::class], function() {
    Route::get('/product/{id}' , 'product_details')->name('product.details');
    Route::post('/product/review' , 'reviewProduct')->name('product.review');
});

// Message Page Routes
Route::get('/message', function() {
    return view('message');
})->middleware('auth')->name('message');

// Cart Page Routes
Route::group(['controller' => CartController::class, 'middleware' => 'auth'], function() {
    Route::get('/cart', 'index')->name('cart');
    Route::post('/cart/edit/{id}', 'update')->name('cart.update');
    Route::delete('/cart/{id}', 'delete')->name('product.delete');
    Route::delete('/cart', 'deleteAll')->name('product.delete.all');
});

// Orders Page Routes
Route::group(['controller' => OrderController::class, 'middleware' => 'auth'], function() {    
    // Orders Page
    Route::get('/orders', 'index')->name('orders');
    // Order Details
    Route::get('/order/{id}', 'viewBill')->name('bill');
    Route::delete('/orders/{id}', 'cancelOrder')->name('cancel.order');
});

// Checkout Page Routes
Route::group(['controller' => CheckoutController::class], function() {
    Route::get('/checkout', 'index')->middleware('auth')->name('checkout');
    Route::post('/checkout', 'store')->name('checkout.store');
    
    // Payment
    Route::get('/checkout/paymentInfo', 'paymentInfo')->name('payment.info');
});

// Contact Page Routes
Route::group(['controller' => QueryController::class], function() {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'store')->name('contact.store');
});

//Workout Page Routes
Route::get('/workout_plans', [WorkoutPlansController::class , 'index' ])->name('workout.plans');
Route::get('/workout/{id}', [WorkoutController::class , 'index' ])->middleware(['auth', 'workout.complete'])->name('workout');
Route::post('/workout_completed/{id}', [UserWorkoutLogController::class , 'store' ])->middleware('auth')->name('workout.completed');

// Trainers Routes
Route::group(['controller' => TrainerController::class], function() {
    Route::get('/trainers', 'index')->name('trainers');
    Route::post('/trainers', 'reviewTrainer')->name('trainers.review');
});

// Community Page
Route::group(["controller" => PostController::class], function() {
    Route::get('/community', 'index')->name('community');
    Route::get('/post/{id}', 'singlePost')->name('post');
    
    Route::delete('/post/uncomment', 'uncomment')->middleware("auth")->name('post.uncomment');
    Route::delete('/post/{id}', 'destroy')->middleware("auth")->name('post.delete');
    
    Route::post('/post/share', 'share')->middleware("auth")->name('post.share');
    Route::post('/post/like/{id}', 'like')->middleware("auth")->name('post.like');
    Route::post('/post/unlike/{id}', 'unlike')->middleware("auth")->name('post.unlike');
    Route::post('/post/comment', 'comment')->middleware("auth")->name('post.comment');
    Route::post('/post/image', 'shareImage')->middleware("auth")->name('post.share.image');
    Route::post('/post/video', 'shareVideo')->middleware("auth")->name('post.share.video');
    Route::post('/trainer/follow', 'follow')->middleware("auth")->name('user.follow');
    Route::post('/trainer/unfollow', 'unfollow')->middleware("auth")->name('user.unfollow');
});

// Trainers Pricing
Route::group(["controller" => TrainerController::class], function() {
    Route::get('/pricing/{id}', 'pricing')->name('pricing');
    Route::post('/pricing/payment', 'subscribe')->name('subscription.payment');
    
    Route::get('/verify', 'verify');
});