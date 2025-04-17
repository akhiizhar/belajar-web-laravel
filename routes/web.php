<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // panggil controller userController

Route::get('/', function () {
    return view('welcome');
});

Route::get('tampil-user', [UserController::class, 'tampilUser']);

Route::get('tambah-user', [UserController::class, 'tambahUser']);

Route::post('tambah-user', [UserController::class, 'simpanUser']);
