<?php

use App\Http\Controllers\uzenofalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/role-page', [uzenofalController::class, 'index'])->middleware('auth'); 
