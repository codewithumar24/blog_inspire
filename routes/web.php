<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name("index");
Route::get('/blog',[HomeController::class,'blog'])->name("blog");
Route::get('/category',[HomeController::class,'category'])->name("category");
Route::get('/about',[HomeController::class,'about'])->name("about");
Route::get('/contact',[HomeController::class,'contact'])->name("contact");

// auth routes
Route::get('/login',[AuthController::class,'loginform'])->name("login");
Route::get('/signup',[AuthController::class,'signform'])->name("signup");
Route::post('/register',[AuthController::class,'register'])->name('register');


// dashboard routes

Route::get('/dashboard',[DashboardController::class,'index'])->name("dashboard");