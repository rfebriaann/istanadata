<?php

use App\Http\Controllers\Api\RiwayatKomoditasController;
use App\Http\Controllers\Api\FsvaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/dokumens', App\Http\Controllers\Api\DokumenController::class);

Route::get('/riwayat', [RiwayatKomoditasController::class, 'index']);
Route::get('/riwayat/{id}', [RiwayatKomoditasController::class, 'show']);

Route::get('/fsva', [FsvaController::class, 'index']);
Route::get('/fsva/{id}', [FsvaController::class, 'show']);
