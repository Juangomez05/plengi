<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MatrizController;


//landing page

Route::get('/', function () {
    return view('landing_page.landing_page');
});


//AUTH

//iniciar sesion
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('guardar_login');

//registro
Route::get('/registration', [AuthController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registration', [AuthController::class, 'registration'])->name('guardar_registro');

//logoaut
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//MATRIZ
Route::get('/presupuesto', [MatrizController::class, 'showMatriz'])->name('matriz')->name('presupuesto');
Route::post('/presupuesto',[MatrizController::class, 'createMatriz'])->name('crear_presupuesto');
