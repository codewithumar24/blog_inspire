<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("index");
Route::get('/blog', [HomeController::class, 'blog'])->name("blog");
Route::get('/category', [HomeController::class, 'category'])->name("category");
Route::get('/about', [HomeController::class, 'about'])->name("about");
Route::get('/contact', [HomeController::class, 'contact'])->name("contact");

// auth routes
Route::get('/login', [AuthController::class, 'loginform'])->name("login");
Route::get('/signup', [AuthController::class, 'signform'])->name("signup");
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logins', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// dashboard routes

Route::middleware('admin')->prefix('/admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name("dashboard");

    Route::prefix('/category')->group(function () {
        Route::get('/all', [CategoryController::class, 'index'])->name("category.index");
        Route::get('/create', [CategoryController::class, 'create'])->name("category.create");
        Route::post('/store', [CategoryController::class, 'store'])->name("category.store");

        Route::get('/show/{id}', [CategoryController::class, 'show'])->name('category.show');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    });



    // post routes

    Route::get('/post/all', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
});
