<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PadreController;
use App\Http\Controllers\AdministradorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/administradores', [AdministradorController::class, 'index']);
Route::get('/administradores/crear', [AdministradorController::class, 'create']);
Route::post('/administradores/recibir', [AdministradorController::class, 'recibir']);

Route::get('/padres/index', [PadreController::class, 'index']);
