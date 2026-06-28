<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('admin-login', 'storeLogin')->name('store.login');
    Route::get('dashboard', 'dashboard')->name('dashboard');
});

Route::controller(AdminController::class)->middleware('admin')
->group(function() {
    Route::get('dashboard', 'dashboard')->name('dashboard');
});