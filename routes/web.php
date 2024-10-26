<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SeanceController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::group(['middleware'=>'auth'], function() {
        Route::get('index', [AdminController::class, 'index'])->name('index');
        Route::post('add-hall', [HallController::class, 'create'])->name('add-hall');

        Route::post('add-movie', [AdminController::class, 'createMovie'])->name('add-movie');

        Route::post('delete-hall/{id}', [HallController::class, 'delete']);
        Route::post('delete-movie/{id}', [AdminController::class, 'deleteMovie']);

        Route::post('seances', [SeanceController::class, 'update'])->name('seance-update');
        Route::post('add-seance/{id}', [SeanceController::class, 'update'])->name('add-seance');

        Route::post('halls/{id}', [HallController::class, 'update'])->name('halls-update');
        Route::post('seats/{id}', [HallController::class, 'updateSeats'])->name('seats-update');
    });
});

Route::prefix('client')->group(function() {
    Route::get('index', [ClientController::class, 'index']);
    Route::get('hall/{id}', [ClientController::class, 'hall'])->name('client-hall');
    Route::get('payment/{id}', [ClientController::class, 'payment']);
    Route::get('ticket/{id}', [ClientController::class, 'ticket']);
});

//Route::name('user')
