<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', function () {
    return view('auth.signin');
});

Route::post('/signin', [AuthController::class, 'signin']);

Route::get('/signup', function () {
    return view('auth.signup');
});

Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'post']);

Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');

Route::get('/logout', [AuthController::class, 'logout']);
