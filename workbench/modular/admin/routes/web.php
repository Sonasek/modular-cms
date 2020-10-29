<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/login', \Modular\Admin\Http\Controllers\AdminLoginpageController::class)
    ->name('admin.login');

Route::get('/admin', \Modular\Admin\Http\Controllers\AdminHomepageController::class)
    ->middleware('admin')
    ->name('admin.homepage');
