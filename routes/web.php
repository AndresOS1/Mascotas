<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registrarMascota', [MascotaController::class, 'create'])->middleware('auth');
Route::get('/listarMascota', [MascotaController::class, 'index'])->name('listarMascota')->middleware('auth');

Route::get('/actualizarMascota/{id}', [MascotaController::class, 'edit'])->name('editarMascota')->middleware('auth');
Route::post('/editarMascota/{id}', [MascotaController::class, 'update'])->name('actualizarMascota')->middleware('auth');

Route::get('/eliminarMascota/{id}', [MascotaController::class, 'destroy'])->name('eliminarMascota')->middleware('auth');

Route::post('/registrarMascota', [MascotaController::class, 'store'])->name('registrarMascota');


