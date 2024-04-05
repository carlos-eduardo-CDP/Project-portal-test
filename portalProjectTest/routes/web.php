<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::post('/usuarios', [UsuariosController::class, 'saveUser'])->name('usuarios.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
