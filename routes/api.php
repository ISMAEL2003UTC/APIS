<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProvinciaApiController;
use App\Http\Controllers\Api\TipoAtraccionApiController;
use App\Http\Controllers\Api\LugarTuristicoApiController;

Route::apiResource('provincias', ProvinciaApiController::class);
Route::apiResource('tipo-atracciones', TipoAtraccionApiController::class);
Route::apiResource('lugares', LugarTuristicoApiController::class);
