<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::resource('users', UserController::class, true);

Route::post('/users/{id}/enable', [UserController::class, 'enable'])->name('users.enable', true);
Route::post('/users/{id}/disable', [UserController::class, 'disable'])->name('users.disable', true);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return redirect('/login');
});