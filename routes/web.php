<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatriculasController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\TalleresController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/login',[HomeController::class,'login']);
Route::get('/matriculas',[MatriculasController::class,'index'])->name('matriculas.index');
Route::get('/alumnos',[AlumnosController::class,'index'])->name('alumnos.index');
Route::get('/profesores',[ProfesoresController::class,'index'])->name('profesores.index');
Route::get('/cursos',[CursosController::class,'index'])->name('cursos.index');
Route::get('/talleres',[TalleresController::class,'index'])->name('talleres.index');
