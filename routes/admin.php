<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;

Route::group(['as' => 'admin.'], function() {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('login', [AuthController::class, 'login'])->name('login.submit');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('home', [AuthController::class, 'home'])->name('home');
        Route::resource('categories', CategoryController::class)->except('show');
    });

});
