<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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
Route::post('/logins',[AuthController::class,'login'])->name('auth.login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


// dashboard routes

Route::get('/dashboard',[DashboardController::class,'index'])->name("dashboard")->middleware('auth');


Route::get('/category/all',[CategoryController::class,'index'])->name("category.index");
Route::get('/category/create',[CategoryController::class,'create'])->name("category.create");
Route::post('/category/store',[CategoryController::class,'store'])->name("category.store");

Route::get('/category/show/{id}',[CategoryController::class,'show'])->name('category.show');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');