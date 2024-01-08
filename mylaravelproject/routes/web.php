<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'processForm']);

Route::get('/data', [FormController::class, 'showData']);
