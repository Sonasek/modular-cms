<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware' => 'web'], function () {
    Route::get('/{page_tag?}', \Modular\Cms\Http\Controllers\PageController::class)
        ->name('homepage');
});
