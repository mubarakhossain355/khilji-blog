<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;


// Routes for Frontend

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/single-blog',[HomeController::class,'singleBlog'])->name('single.blog');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');


// Routes for Backend
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('category',CategoryController::class);
});
