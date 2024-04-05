<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UsuariosController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
