<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\DashboardMiddleware;

Route::get('/', function () {
    return view('index');
});
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate']);
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('registerNewUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', [PostController::class, 'dashboard'])->name('dashboard')->middleware(AuthMiddleware::class);
