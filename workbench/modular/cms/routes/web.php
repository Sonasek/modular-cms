<?php

use Illuminate\Support\Facades\Route;

Route::get('/{page_tag?}', \Modular\Cms\Http\Controllers\PageController::class);
