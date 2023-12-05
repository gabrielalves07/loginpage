<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ConteudoController;

Route::view('/', 'main')->name('login.form');

Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/conteudo', [ConteudoController::class, 'index'])->name('admin.conteudo');

