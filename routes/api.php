<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::resource('products', \App\Http\Controllers\ProductController::class);


Route::resource('categories', \App\Http\Controllers\CategoryController::class);
