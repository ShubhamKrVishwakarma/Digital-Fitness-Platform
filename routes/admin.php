<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

// Admin Pages Route
Route::group(["as" => "admin.", "middleware" => "can:admin"], function() {
    Route::get("/", function() {
        return redirect()->route('admin.dashboard');
    });
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name("dashboard");

    // Users Page
    Route::get("/users", function() {
        return view("Admin.users");
    })->name("users");
    
    // Exercises Page
    Route::get("/exercises", function() {
        return view("Admin.exercises");
    })->name("exercises");
    
    // Workout Plans Page
    Route::get("/workout_plan", function() {
        return view("Admin.workouts");
    })->name("workout.plan");
    
    // Categories Page
    Route::get("/categories", function() {
        return view("Admin.categories");
    })->name("categories");
    
    // Products Page
    Route::get("/products", function() {
        return view("Admin.products");
    })->name("products");
    
    // Community Page
    Route::get("/community", function() {
        return view("Admin.community");
    })->name("community");

    // Orders Page
    Route::get("/orders", function() {
        return view("Admin.orders");
    })->name("orders");

    // Queries Page
    Route::get("/queries", function() {
        return view("Admin.queries");
    })->name("queries");
});