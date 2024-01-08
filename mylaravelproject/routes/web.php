<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'processForm']);
Route::get('/data', [FormController::class, 'showData']);

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
