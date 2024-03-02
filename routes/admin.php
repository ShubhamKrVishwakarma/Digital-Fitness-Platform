<?php

use Illuminate\Support\Facades\Route;

// Admin Pages Route
Route::group(["as" => "admin."], function() {
    Route::get("/dashboard", function() {
        return view("Admin.dashboard");
    })->name("dashboard");
    
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

    Route::get("/queries", function() {
        return view("Admin.queries");
    })->name("queries");
});