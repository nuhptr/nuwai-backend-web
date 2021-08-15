<?php

use App\Http\Controllers\Api\PekerjaanController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [UserController::class, 'fetch']);
    Route::put('user', [UserController::class, 'updateProfile']);
    
    Route::get('logout', [UserController::class, 'logout']);

    // TODO: route lamaran
    
});

Route::get('jobs', [PekerjaanController::class, 'all']);

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
