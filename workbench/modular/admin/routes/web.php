<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['admin', 'web'])->group(function () {

    Route::get('/admin/login', \Modular\Admin\Http\Controllers\AdminLoginpageController::class)
        ->name('admin.login');

    Route::get('/admin/{key?}', \Modular\Admin\Http\Controllers\AdminHomepageController::class)
        ->name('admin.homepage');

});
