<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;

Route::group(['as' => 'admin.'], function() {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('login', [AuthController::class, 'login'])->name('login.submit');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('home', [AuthController::class, 'home'])->name('home');
        Route::resource('categories', CategoryController::class)->except('show');
        Route::resource('brands', BrandController::class)->except('show');
//        Route::get('brands/{id}/delete', [BrandController::class, 'destroy'])->name('brands.destroy');
    });

});
