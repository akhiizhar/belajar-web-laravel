<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // panggil controller userController

Route::get('/', function () {
    return view('welcome');
});

Route::get('tampil-user', [UserController::class, 'tampilUser']);

Route::get('tambah-user', [UserController::class, 'tambahUser']);

Route::post('tambah-user', [UserController::class, 'simpanUser']);
// edit user
Route::get('edit-user/{id}', [UserController::class, 'editUser'])->name('user.edit');
Route::put('edit-user/{id}', [UserController::class, 'updateUser'])->name('user.update');
Route::delete('delete-user/{id}', [UserController::class, 'deleteUser'])->name('user.destroy');
