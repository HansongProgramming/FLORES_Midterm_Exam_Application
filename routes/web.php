<?php

use App\Http\Controllers\ProductController;

Route::get('/movies', [ProductController::class, 'index']);
