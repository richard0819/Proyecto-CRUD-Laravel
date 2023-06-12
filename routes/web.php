<?php

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

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\ProyectoController;

Route::resource('proyectos', ProyectoController::class);

Route::get('/about', function () {
    return view('about');
})->name('about');

/*
Route::get('/proyectos/informe', 'ProyectoController@generarInformePDF')->name('proyectos.informe');
*/

Route::get('/pdf',[App\Http\Controllers\ProyectoController::class, 'generarInformePDF'])->name('pdf');
