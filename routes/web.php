<?php

use App\Http\Controllers\Indicador1Controller;
use App\Http\Controllers\Indicador2Controller;
use App\Http\Controllers\Indicador3Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Indicador1Controller::class, 'index'])->name('formulario1.index');
Route::get('/formulario1', [Indicador1Controller::class, 'index'])->name('formulario1.index');
Route::post('/formulario1_create', [Indicador1Controller::class, 'store'])->name('formulario1.store');

Route::get('/formulario2', [Indicador2Controller::class, 'index'])->name('formulario2.index');
Route::post('/formulario2_create', [Indicador2Controller::class, 'store'])->name('formulario2.store');

Route::get('/formulario3', [Indicador3Controller::class, 'index'])->name('formulario3.index');
Route::post('/formulario3_create', [Indicador3Controller::class, 'store'])->name('formulario3.store');
