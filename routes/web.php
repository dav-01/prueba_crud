<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::resource('users', UserController::class);

Route::post('/users/{id}/enable', [UserController::class, 'enable'])->name('users.enable');
Route::post('/users/{id}/disable', [UserController::class, 'disable'])->name('users.disable');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return redirect('/login');
});