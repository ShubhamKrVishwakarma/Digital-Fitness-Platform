<?php

use Illuminate\Support\Facades\Route;

// Admin Pages Route
Route::group(["as" => "admin.", "middleware" => "can:admin"], function() {
    
    // Admin Dashboard Page
    Route::get("/dashboard", function() {
        return view('Admin.dashboard');
    })->name('dashboard');

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
    
    // Conversations Page
    Route::get("/subscriptions", function() {
        return view("Admin.subscriptions");
    })->name("subscriptions");

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