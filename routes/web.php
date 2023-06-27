<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::get('/vyshyvka/{id}', [ProductController::class, 'vyshyvka']);
Route::get('/HandmadeForYou', [ProductController::class, 'HandmadeForYou']);