<?php

use App\Http\Controllers\Web\LamaranController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\PekerjaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() { 

    Route::name('dashboard.')->prefix('dashboard')->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::middleware(['admin'])->group(function() {
            Route::resource('user', UserController::class)->only([
                'index', 'edit', 'update', 'destroy'
            ]);
            Route::resource('lamaran', LamaranController::class);
            Route::resource('pekerjaan', PekerjaanController::class);
        });
    });
}); 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
