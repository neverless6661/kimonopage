<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros');
Route::get('/servicios', [PaginaController::class, 'servicios'])->name('servicios');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');

/*
Route::get('/', 'PaginaController@inicio')->name('inicio');
Route::get('/nosotros', 'PaginaController@nosotros')->name('nosotros');
Route::get('/servicios', 'PaginaController@servicios')->name('servicios');
Route::get('/contacto', 'PaginaController@contacto')->name('inicio');
*/



