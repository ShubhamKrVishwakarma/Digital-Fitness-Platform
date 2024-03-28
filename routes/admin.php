<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\QueryController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Admin Pages Route
Route::group(["as" => "admin.", "middleware" => "can:admin"], function() {
    Route::get("/", function() {
        return redirect()->route('admin.dashboard');
    });
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name("dashboard");

    Route::get("/users", [UserController::class, 'index'])->name("users");

    Route::get("/exercises", function() {
        return view("Admin.exercises");
    })->name("exercises");
    
    Route::get("/workout_plan", function() {
        return view("Admin.workouts");
    })->name("workout.plan");
    
    Route::get("/categories", function() {
        return view("Admin.categories");
    })->name("categories");
    
    Route::get("/products", function() {
        return view("Admin.products");
    })->name("products");
    
    Route::get("/community", function() {
        return view("Admin.community");
    })->name("community");

    Route::get("/orders", function() {
        return view("Admin.orders");
    })->name("orders");

    Route::get('/queries', [QueryController::class, 'index'])->name('queries');

    Route::post("/users/addMember", [UserController::class, 'create']);
    
    Route::post("/users/addTrainer", [UserController::class, 'store']);

    Route::post('/users/getUserDetails', [UserController::class, 'getUserDetails']);

    Route::post('/users/updateUser', [UserController::class, 'update'])->name('user.update');
});