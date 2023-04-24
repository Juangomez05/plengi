<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MatrizController;
use App\Http\Controllers\APUController;
use App\Http\Controllers\MaterialesController;

//-----------------//

//landing page

Route::get('/', function () {
    return view('landing_page.landing_page');
});

//-----------------//

//AUTH

//iniciar sesion
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('guardar_login');

//registro
Route::get('/registration', [AuthController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registration', [AuthController::class, 'registration'])->name('guardar_registro');

//logoaut
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//-----------------//

//MATRIZ
//vista
Route::get('/presupuesto', [MatrizController::class, 'showMatriz'])->name('presupuesto');
//crear matriz
Route::post('/presupuesto',[MatrizController::class, 'createMatriz'])->name('crear_presupuesto');
//editar matriz
Route::get('/presupuesto/{id}/update',[MatrizController::class, 'editMatriz'])->name('editar_matriz');
Route::put('/presupuesto/{id}',[MatrizController::class, 'updateMatriz'])->name('actualizar_matriz');
//eliminar matriz
Route::delete('/presupuesto/{id}',[MatrizController::class, 'destroyMatriz'])->name('eliminar_matriz');

//-----------------//

//MATERIALES
//vista
Route::get('/materiales',[MaterialesController::class, 'showMateriales'])->name("materiales");
//crear materiales
Route::post('/materiales/create',[MaterialesController::class, 'createMateriales'])->name("crear_materiales");
//editar materiales
Route::get('/materiales/{id}/update',[MaterialesController::class, 'editMateriales'])->name("editar_materiales");
Route::put('/materiales/{id}',[MaterialesController::class, 'updateMateriales'])->name("actualizar_materiales");
//eliminar material
Route::delete('/materiales/{id}',[MaterialesController::class, 'destroyMaterial'])->name("eliminar_material");

//-----------------//

//APU
//vista
Route::get('/apu',[APUController::class, 'showAPU'])->name('apu');
