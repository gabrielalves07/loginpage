<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ConteudoController;

Route::view('/', 'main')->name('login.form')->middleware('guest');

Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/admin/conteudo', [ConteudoController::class, 'index'])->name('admin.conteudo')->middleware('auth');



