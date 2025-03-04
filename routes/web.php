<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ItemController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);

Route::get('/items', [ItemController::class, 'index']);
