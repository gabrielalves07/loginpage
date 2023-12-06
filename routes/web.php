<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\UserController;

Route::view('/login', 'login')->name('login.form')->middleware('guest');
Route::view('/register', 'cadastro')->name('register.form')->middleware('guest');

Route::resource('users', UserController::class);

Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/admin/conteudo', [ConteudoController::class, 'index'])->name('admin.conteudo')->middleware('auth');



