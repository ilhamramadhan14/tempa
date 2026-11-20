<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login', ['tab' => 'masuk']);
})->name('login');

Route::get('/signup', function () {
    return view('login', ['tab' => 'daftar']);
})->name('signup');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');