<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BicicletaController;

Route::get('/', [BicicletaController::class, 'index']);
Route::get('show', [BicicletaController::class, 'show']);
Route::get('bicicletas/{id}', [BicicletaController::class, 'showBici']);
Route::get('newBici', [BicicletaController::class, 'newBici']);
Route::get('bicicletasNew', [BicicletaController::class, 'createBici']);
Route::get('bicicletas/{id}/update', [BicicletaController::class, 'upBici2']);
Route::get('bicicletas/{id}/delete', [BicicletaController::class, 'deltBici']);
//Ruta de el mapa
Route::get('lfbicicletas', [BicicletaController::class, 'lfmaps']);