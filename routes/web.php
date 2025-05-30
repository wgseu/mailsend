<?php

use App\Http\Controllers\mailController;
use App\Mail\mailTeste;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/email', [mailController::class, 'index']);