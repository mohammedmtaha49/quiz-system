<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'storeLogin')->name('store.login');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'storeRegister')->name('store.register');
});

Route::controller(AdminController::class)->middleware('admin')
->group(function() {
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('logout', 'logout')->name('logout');
});

Route::resource('categories', CategoryController::class)
    ->middleware('admin');
Route::get(
        'categories/{category}/confirm-delete',
        [CategoryController::class,'confirmDelete']
        )->middleware('admin')->name('categories.confirm-delete');