<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriasController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('materia',MateriasController::class);
Route::get('/materias/create', [MateriasController::class, 'create'])->name('materia.create');
Route::post('/materias/store', [MateriasController::class, 'store'])->name('materia.store');
Route::post('/materias/show', [MateriasController::class, 'show'])->name('materia.show');
Route::delete('/materias/{id}', [MateriasController::class, 'destroy'])->name('materia.destroy');
Route::get('/materias', [MateriasController::class, 'index'])->name('materia.index');