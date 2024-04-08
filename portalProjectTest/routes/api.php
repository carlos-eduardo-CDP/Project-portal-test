<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return 'Ola mundo';
});

Route::get('/teste', [\App\Http\Controllers\ApiUsuarioController::class, 'getAll']);
