<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HijoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PadreController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\AdministradorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login/administradores', [LoginController::class, 'loginAdmin']);
Route::post('/login/guardianes', [LoginController::class, 'loginGuardian']);
Route::post('/login/padres', [LoginController::class, 'loginPadre']);

//ADMINISTRADORES
Route::put('/administradores/actualizar/{id}', [AdministradorController::class, 'update']);
Route::get('/administradores/obtener', [AdministradorController::class, 'index']);
Route::post('/administradores/crear', [AdministradorController::class, 'store']);
Route::delete('/administradores/eliminar/{id}', [AdministradorController::class, 'destroy']);

//GUARDIANES
Route::put('/guardianes/actualizar/{id}', [GuardianController::class, 'update']);
Route::get('/guardianes/obtener', [GuardianController::class, 'index']);
Route::post('/guardianes/crear', [GuardianController::class, 'store']);
Route::delete('/guardianes/eliminar/{id}', [GuardianController::class, 'destroy']);

//PADRES
Route::put('/padres/actualizar/{id}', [PadreController::class, 'update']);
Route::get('/padres/obtener', [PadreController::class, 'index']);
Route::post('/padres/crear', [PadreController::class, 'store']);
Route::delete('/padres/eliminar/{id}', [PadreController::class, 'destroy']);

//HIJOS
Route::put('/hijos/actualizar/{id}', [HijoController::class, 'update']);
Route::get('/hijos/obtener', [HijoController::class, 'index']);
Route::post('/hijos/crear', [HijoController::class, 'store']);
Route::delete('/hijos/eliminar/{id}', [HijoController::class, 'destroy']);

// Route::apiResource('administradores', AdministradorController::class);
// Route::apiResource('guardianes', GuardianController::class);
// Route::apiResource('padres', PadreController::class);
// Route::apiResource('hijos', HijoController::class);
