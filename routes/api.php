<?php

use App\Http\Controllers\CarrosController;
use illuminate\Http\Request;
use illuminate\Support\Facades\Route;

Route::post('/armazenar/dados', [CarrosController::class, 'store']);
Route::get('/registros', [CarrosController::class, 'index']);
Route::put('/atualizar', [CarrosController::class, 'update']);
Route::delete('/delete/{id}/carro', [CarrosController::class, 'delete']);
Route::get('/carro/{id}/find', [CarrosController::class, 'findById']);
Route::get('/carro/placa', [CarrosController::class, 'searchByPlaca']);
Route::get('/carro/ano', [CarrosController::class, 'searchByAno']);
Route::get('/carro/tipo', [CarrosController::class, 'searchByTipo']);
Route::get('/carro/marca', [CarrosController::class, 'searchByMarca']);
Route::get('/carro/valor', [CarrosController::class, 'searchByValor']);