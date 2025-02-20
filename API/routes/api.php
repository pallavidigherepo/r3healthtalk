<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthScoreController;
use App\Http\Controllers\HealthParameterController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/health-parameters', [HealthParameterController::class, 'index']);
Route::post('/health-scores', [HealthScoreController::class, 'store']);