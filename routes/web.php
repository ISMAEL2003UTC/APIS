<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LugarTuristicoController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\TipoAtraccionController;


use App\Models\LugarTuristico;    
use App\Models\Provincia;         
use App\Models\TipoAtraccion; 


Route::get('/', [LugarTuristicoController::class, 'index'])->name('home');

// Rutas para lugares turisticos -------------------------------------
Route::resource('lugares', LugarTuristicoController::class);

// Rutas para provincias -------------------------------------------
Route::resource('provincias', ProvinciaController::class);

// Rutas para tipos de atraccion
Route::resource('tipoAtraccion', TipoAtraccionController::class);

