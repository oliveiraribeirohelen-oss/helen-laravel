<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chef', [PrincipalController::class, 'chef']);
Route::get('/card', [PrincipalController::class, 'card']);
Route::get('/profile', [PrincipalController::class, 'profile']);

Route::get('/sobre-nos', [PrincipalController::class, 'sobreNos']);
Route::get('/contato', [PrincipalController::class, 'contato']);
Route::post('/contato', [PrincipalController::class, 'enviarContato']);
