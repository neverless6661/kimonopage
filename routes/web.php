<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/nosotros', [PaginaController::class, 'inicio'])->name('nosotros');
Route::get('/servicios', [PaginaController::class, 'inicio'])->name('servicios');
Route::get('/contacto', [PaginaController::class, 'inicio'])->name('contacto');




