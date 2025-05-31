<?php

use App\Http\Controllers\fileController;
use App\Http\Controllers\mailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/email', [mailController::class, 'index']);
Route::get('/arquivo', [fileController::class, 'index']);
Route::post('/send', [fileController::class, 'store'])->name('upload.store');
