<?php

use App\Http\Controllers\Api\V1\CategoriaController;
use App\Http\Controllers\Api\V1\FinalidadeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ReservaController;
use App\Http\Controllers\Api\V1\SalaController;

Route::prefix('v1')->group(function(){
    Route::get('reservas', [ReservaController::class, 'getReservas']);

    Route::get('categorias', [CategoriaController::class, 'index']);
    Route::get('categorias/{categoria}', [CategoriaController::class, 'show']);

    Route::get('salas', [SalaController::class, 'index']);
    Route::get('salas/{sala}', [SalaController::class, 'show']);

    Route::get('finalidades', [FinalidadeController::class, 'index']);
});